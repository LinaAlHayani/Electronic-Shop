<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label for="name">الاسم:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="email">البريد الإلكتروني:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">كلمة المرور:</label>
    <input type="password" name="password" id="password" required><br>

    <label for="shipping_address">عنوان الشحن:</label>
    <input type="text" name="shipping_address" id="shipping_address" required><br>

    <label for="phone_number">رقم الهاتف:</label>
    <input type="text" name="phone_number" id="phone_number" required><br>

    <button type="submit">إضافة الزبون</button>
</form>