@extends('layouts.app')

@section('content')
    <player-view/>
@endsection
<script>
    import PlayerView from "../js/components/PlayerView";
    export default {
        components: {PlayerView}
    }
</script>