@if(isset($row->price))
    <p class="mb-0 table-font">{{ getAdminCurrencySymbol($row->currency) .' ' .number_format($row->price) }} </p>
@else
    N/A
@endif
