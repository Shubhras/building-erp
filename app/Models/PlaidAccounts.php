<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaidAccounts extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'plaid_item_id',
        'plaid_access_token',
        'plaid_public_token',
        'link_session_id',
        'link_token',
        'institution_id',
        'institution_name',
        'account_id',
        'account_name',
        'account_mask',
        'account_type',
        'account_subtype',
        'user_id',
        'last_update',
        'last_status',
    ];
}
