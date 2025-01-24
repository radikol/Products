<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $fillable = ['name', 'category_id', 'description', 'image'];
    

    // protected $table = 'products';
    // // protected $primaryKey = 'id';
    // // public $timestamps = false;
    // protected $guarded = ['id'];
    // // protected $fillable = [];
    // // protected $hidden = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            if ($obj->image) {
                // Remove 'storage/' from the start of the path to get the relative path
                $path = str_replace('storage/', '', $obj->image);
                $response = Storage::disk('public')->delete($path);
            }
        });
    }


    private function deleteImage($attribute_name) {
        // Remove 'storage/' from the start of the path to get the relative path
        $path = str_replace('storage/', '', $this->{$attribute_name});
        $response = Storage::disk('public')->delete($path);
    }


    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "products";

        // if the image was erased
        if ($value==null) {
            $this->deleteImage($attribute_name);
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        } else {
            $this->deleteImage($attribute_name);
            $disk = "public";
            // filename is generated -  md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension()
            $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
            $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
