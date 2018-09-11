<aside class="side-menu">

    <p>
        General
    </p>
                <ul>
                    <li><a href="{{route('admin.adminDashboard')}}">Admin Dashboard</a> </li>
                </ul>

    <p>
        Administration
    </p>
    <ul>
        <li><a href="{{route('users.index')}}">Manage Users</a> </li>
        <li><a href="{{route('roles.index')}}">Roles &amp; Permissions</a> </li>
    </ul>

    <p>
        Manage Items
    </p>
    <ul>
        <li><a href="{{route('phones.create')}}">Add New Phone</a> </li>
        <li><a href="{{route('phones.index')}}">Available Phones</a> </li>
        <li><a href="{{route('phones.notInStock')}}">Phones not In Stock</a> </li>
    </ul>


    <p>
        Manage Orders
    </p>
    <ul>
        <li><a href="{{route('orders.index')}}">All Orders</a> </li>
        <li><a href="{{route('phones.index')}}">View Pending Orders</a> </li>
        <li><a href="{{route('orders.toCommission')}}">Orders to Commission</a> </li>
        <li><a href="#">Delete Order</a> </li>
    </ul>

</aside>