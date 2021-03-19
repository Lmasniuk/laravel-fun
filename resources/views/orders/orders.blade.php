<html>
    <head>
        <title>Orders</title>
    <head>
    <body>


        <h1>Orders</h1>


        {{-- <h2> {{ $order->order_title }}</h2>
        <h3> Status: {{ $order->order_status }}</h3>
        <p> {{ $order->order_content }} </p> --}}

        @foreach ( $orders as $order )
            <h2> {{ $order->order_title }}</h2>
            <h3> Status: {{ $order->order_status }}</h3>
            <p> {{ $order->order_content }} </p>
        @endforeach
        


    </body>
</html>