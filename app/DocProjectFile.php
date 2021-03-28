<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocProjectFile extends Model
{
    use HasFactory;

    protected $primaryKey = 'project_file_id';
    protected $table = "doc_project_files";

    protected $fillable = [
        'project_file_title',
        'project_id',
        'file_path'
    ];
}
