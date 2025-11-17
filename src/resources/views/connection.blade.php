<h1>Welcome to ShadhinPay</h1>
<form action="{{ route('shadhinpay.pay') }}" method="POST">
    @csrf
    <button type="submit">Pay Now</button>
</form>
