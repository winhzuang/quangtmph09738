<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $table = "invoice_detail";
    protected $primatyKey = "id";
    protected $fillable = [
        'invoice_id',
        'product_id',
        'unit_price',
        'quantity',
    ];
    public function invoice(){
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
