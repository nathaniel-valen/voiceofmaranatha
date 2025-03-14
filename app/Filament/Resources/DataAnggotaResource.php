<?php

namespace App\Filament\Resources;

use App\Filament\Exports\DataAnggotaExporter as ExportsDataAnggotaExporter;
use App\Filament\Resources\DataAnggotaResource\Pages;
use App\Filament\Resources\DataAnggotaResource\RelationManagers;
use App\Models\DataAnggota;
use App\Filament\Exports\DataAnggotaExporter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataAnggotaResource extends Resource
{
    protected static ?string $model = DataAnggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(32)
                    ->label('Nama Lengkap'),
                Forms\Components\Select::make('faculty')
                    ->required()
                    ->label('Fakultas')
                    ->options([
                        'Fakultas Kedokteran' => 'Fakultas Kedokteran',
                        'Fakultas Teknologi dan Rekayasa Cerdas' => 'Fakultas Teknologi dan Rekayasa Cerdas',
                        'Fakultas Psikologi' => 'Fakultas Psikologi',
                        'Fakultas Humaniora dan Industri Kreatif' => 'Fakultas Humaniora dan Industri Kreatif',
                        'Fakultas Hukum dan Bisnis Digital' => 'Fakultas Hukum dan Bisnis Digital',
                        'Fakultas Kedokteran Gigi' => 'Fakultas Kedokteran Gigi',
                    ]),
                Forms\Components\Select::make('major')
                    ->required()
                    ->label('Program Studi')
                    ->options([
                        'Kedokteran Umum' => 'Kedokteran Umum',
                        'Teknik Sipil' => 'Teknik Sipil',
                        'Teknik Elektro' => 'Teknik Elektro',
                        'Teknik Industri' => 'Teknik Industri',
                        'Sistem Komputer' => 'Sistem Komputer',
                        'Teknik Informatika' => 'Teknik Informatika',
                        'Sistem Informasi' => 'Sistem Informasi',
                        'Psikologi' => 'Psikologi',
                        'D-III Bahasa Mandarin' => 'D-III Bahasa Mandarin',
                        'D-III Seni Rupa dan Desain' => 'D-III Seni Rupa dan Desain',
                        'Sastra Inggris' => 'Sastra Inggris',
                        'Sastra Jepang' => 'Sastra Jepang',
                        'Sastra China' => 'Sastra China',
                        'Seni Rupa Murni' => 'Seni Rupa Murni',
                        'Desain Interior' => 'Desain Interior',
                        'Desain Komunikasi Visual' => 'Desain Komunikasi Visual',
                        'Arsitektur' => 'Arsitektur',
                        'Hukum' => 'Hukum',
                        'Akuntasi' => 'Akuntasi',
                        'Manajemen' => 'Manajemen',
                        'Kedokteran Gigi' => 'Kedokteran Gigi',
                    ]),
                Forms\Components\Select::make('generation')
                    ->required()
                    ->label('Angkatan')
                    ->options(array_combine(range(2017, date('Y')), range(2017, date('Y')))),
                Forms\Components\TextInput::make('nrp')
                    ->required()
                    ->numeric()
                    ->maxLength(7)
                    ->label('NRP'),
                Forms\Components\TextInput::make('phone_number')
                    ->required()
                    ->maxLength(12)
                    ->label('No. HP/Whatsapp'),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->label('Username Instagram'),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required()
                    ->label('Tanggal Lahir'),
                Forms\Components\Select::make('division')
                    ->options([
                        'Band' => 'Band',
                        'Choir' => 'Choir',
                        'Modern Dance' => 'Modern Dance',
                        'Slow Dance' => 'Slow Dance',
                        'Banner' => 'Banner',
                    ])
                    ->required()
                    ->label('Divisi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('faculty')
                    ->searchable()
                    ->sortable()
                    ->label('Fakultas'),
                Tables\Columns\TextColumn::make('major')
                    ->searchable()
                    ->sortable()
                    ->label('Program Studi'),
                Tables\Columns\TextColumn::make('generation')
                    ->searchable()
                    ->sortable()
                    ->label('Angkatan'),
                Tables\Columns\TextColumn::make('nrp')
                    ->searchable()
                    ->sortable()
                    ->label('NRP'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable()
                    ->label('No. HP/Whatsapp'),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable()
                    ->label('Username Instagram'),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->searchable()
                    ->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('division')
                    ->searchable()
                    ->label('Divisi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\EditAction::make(),
                ]),
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
            'index' => Pages\ListDataAnggotas::route('/'),
            'create' => Pages\CreateDataAnggota::route('/create'),
            'edit' => Pages\EditDataAnggota::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Data Anggota';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Data Anggota';
    }
}
