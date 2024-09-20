<!-- resources/views/orders.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Assuming using Tailwind or Bootstrap -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">Orders List</h1>

        <!-- Table for displaying orders -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                    <th>Order Total</th>
                </tr>
            </thead>
            <tbody>
          
            </tbody>
        </table>
    </div>
</body>
</html>
