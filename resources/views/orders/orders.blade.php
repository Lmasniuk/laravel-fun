<html>
    <head>
        <title>Orders</title>
    <head>
    <body>

        <h1>Orders</h1>


        {{-- <h2> {{ $order_title }}</h2>
        <h3> Status: {{ $order_status }}</h3>
        <p> {{ $order_content }} </p> --}}

        @foreach ( $data as $item )
            <p>{{ $item }}</p>
        @endforeach
        


    </body>
</html>