<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $calendarData['subtitle'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px;
            font-size: 11px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
            border-bottom: 3px solid #002366;
            padding-bottom: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            color: #002366;
            letter-spacing: 1px;
        }

        .header .contacts {
            margin: 8px 0;
            font-size: 12px;
            color: #666;
        }

        .header .subtitle {
            font-size: 16px;
            font-weight: bold;
            color: #002366;
            margin: 5px 0;
        }

        .calendar-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .calendar-table th {
            background: #002366;
            color: white;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        .calendar-table td {
            border: 1px solid #ddd;
            padding: 6px;
            vertical-align: top;
            background: white;
        }

        .calendar-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .date-cell {
            text-align: center;
            font-weight: bold;
            width: 35px;
            background: #f0f4f8;
            color: #002366;
        }

        .notes-section {
            page-break-inside: avoid;
            background: #f8f9fa;
            padding: 15px;
            border-left: 5px solid #002366;
        }

        .notes-section h2 {
            font-size: 16px;
            margin-bottom: 15px;
            color: #002366;
        }

        .notes-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notes-list li {
            margin-bottom: 8px;
            padding: 6px 10px;
            background: white;
            border-radius: 3px;
            font-size: 10px;
            line-height: 1.4;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 9px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>{{ $calendarData['title'] }}</h1>
        <div class="contacts">📞 {{ implode(' / ', $calendarData['contacts']) }}</div>
        <div class="subtitle">{{ $calendarData['subtitle'] }}</div>
    </div>

    <!-- Calendar Table -->
    <table class="calendar-table">
        <thead>
            <tr>
                @foreach($calendarData['months'] as $month)
                    <th colspan="2">{{ $month['name'] }}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($calendarData['months'] as $month)
                    <th>DATE</th>
                    <th>DAY</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
                $maxRows = max(array_map(fn($month) => count($month['days']), $calendarData['months']));
            @endphp

            @for($i = 0; $i < $maxRows; $i++)
                <tr>
                    @foreach($calendarData['months'] as $month)
                        @if(isset($month['days'][$i]))
                            <td class="date-cell">{{ $month['days'][$i][0] }}</td>
                            <td>{{ $month['days'][$i][1] }}</td>
                        @else
                            <td></td>
                            <td></td>
                        @endif
                    @endforeach
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- Notes Section -->
    <div class="notes-section">
        <h2>Important Notes</h2>
        <ul class="notes-list">
            @foreach($calendarData['notes'] as $note)
                <li>{{ $note }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p><strong>St. Francis of Assisi Private School</strong></p>
        <p>1310/4 East Kamenza, Chililabombwe, Zambia | info@stfrancisschool.tech</p>
        <p>© {{ date('Y') }} St. Francis of Assisi Private School. All rights reserved.</p>
    </div>
</body>
</html>
