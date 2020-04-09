<div class="grid-dropdown-actions dropdown">

    <ul class="actions-menu" style="min-width: 70px !important;border-radius:0;left: -65px;margin-top:8px; padding-left:0">


        @if(!empty($custom))

            @foreach($custom as $action)
            {!! $action->render() !!}
            @endforeach
        @endif


        @foreach($default as $action)
        {!! $action->render() !!}
        @endforeach

    </ul>
</div>
