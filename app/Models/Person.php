<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const QUALITA_SELECT = [
        '1' => 'Referente',
        '2' => 'Titolare',
        '3' => 'Presidente',
    ];

    public $table = 'people';

    public $orderable = [
        'id',
        'first_name',
        'last_name',
        'qualita',
        'ref',
        'address',
        'cap',
        'city',
        'cf',
        'piva',
    ];

    public $filterable = [
        'id',
        'first_name',
        'last_name',
        'qualita',
        'ref',
        'address',
        'cap',
        'city',
        'cf',
        'piva',
        'contract.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'qualita',
        'ref',
        'address',
        'cap',
        'city',
        'cf',
        'piva',
    ];

    public function getQualitaLabelAttribute($value)
    {
        return static::QUALITA_SELECT[$this->qualita] ?? null;
    }

    public function contract()
    {
        return $this->belongsToMany(Contract::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
