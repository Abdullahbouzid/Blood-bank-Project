<!DOCTYPE html>
<html>
<head>
    <title>Blood Banks</title>
</head>
<body>
    <h1>Blood Banks</h1>

    <form method="POST" action="">
        @csrf

        <label for="city">Select City:</label>
        <select name="Name" id="Name">
            <option value="">Select</option>
            @foreach ($NameCenter as $nameOption)
                <option value="{{ $nameOption->id }}">{{ $nameOption->Name }}</option>
            @endforeach
        </select>

        <button type="submit">Search</button>
    </form>

    @if (isset($NameCenters) && isset($BankNames))
        <h2>Results for City: {{ $Nameselect }}</h2>

        <h3>Blood Banks:</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($NameCenters as $NameCenter)
                    <tr>
                        <td>{{ $NameCenter->id }}</td>
                        <td>{{ $NameCenter->name }}</td>
                        <td>{{ $NameCenter->type }}</td>
                        <td>{{ $NameCenter->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Donation Centers:</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($BankNames as $BankName)
                    <tr>
                        <td>{{ $BankName->id }}</td>
                        <td>{{ $BankName->name }}</td>
                        <td>{{ $BankName->type }}</td>
                        <td>{{ $BankName->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
