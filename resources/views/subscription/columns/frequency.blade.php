@if($row->plan_frequency == 1)
    <span class="badge bg-light-success table-font">{{\App\Models\Subscription::MONTH}}</span>
@elseif($row->plan_frequency == 2)
    <span class="badge bg-light-danger table-font">{{ \App\Models\Subscription::YEAR }}</span>
@endif
