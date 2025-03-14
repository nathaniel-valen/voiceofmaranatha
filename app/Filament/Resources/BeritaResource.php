<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan('full')
                    ->label('Judul Berita')
                    ->maxLength(255),

                Forms\Components\Textarea::make('content')
                    ->label('Deskripsi Berita')
                    ->required()
                    ->columnSpan('full')
                    ->rows(10),

                Forms\Components\FileUpload::make('image')
                    ->label('Foto Berita')
                    ->image()
                    ->maxSize(4096)
                    ->required(),
                Forms\Components\FileUpload::make('sub_image')
                    ->label('Foto Berita Tambahan')
                    ->image()
                    ->maxSize(4096),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Judul Berita'),

                Tables\Columns\TextColumn::make('content')
                    ->label('Deskripsi Berita'),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto Berita')
                    ->disk('public'),
                Tables\Columns\ImageColumn::make('sub_image')
                    ->label('Foto Berita Tambahan')
                    ->disk('public'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Berita';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Berita';
    }
}
