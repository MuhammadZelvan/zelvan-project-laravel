<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('contact_name')->required(),
                Forms\Components\TextInput::make('contact_email')->required(),
                Forms\Components\TextInput::make('contact_subject')->required(),
                Textarea::make('contact_message')
                ->placeholder('Enter the description...') // Placeholder untuk textarea
                ->required() // Jika wajib diisi
                ->rows(5) // Jumlah baris yang akan ditampilkan
                ->maxLength(500), // Batas maksimal karakter
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contact_id')->searchable() ->sortable(),
                Tables\Columns\TextColumn::make('contact_name')->searchable() ->sortable(),
                Tables\Columns\TextColumn::make('contact_email')->searchable() ->sortable(),
                Tables\Columns\TextColumn::make('contact_subject')->searchable() ->sortable(),
                Tables\Columns\TextColumn::make('contact_message')->searchable() ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
