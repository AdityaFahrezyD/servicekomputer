@section('content')
<h1>Selamat datang, {{ Auth::guard('admin')->user()->nama }}!</h1>
