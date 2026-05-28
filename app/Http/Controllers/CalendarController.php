<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display the school activity calendar.
     */
    public function index()
    {
        // Calendar data for Term Two 2025
        $calendarData = $this->getTermTwoCalendarData();

        return view('calendar.school_activity_calendar', compact('calendarData'));
    }

    /**
     * Download the calendar as PDF
     */
    public function download()
    {
        $calendarData = $this->getTermTwoCalendarData();

        try {
            // Try to use DomPDF if available
            if (class_exists('\Barryvdh\DomPDF\Facade\Pdf')) {
                $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('calendar.pdf', compact('calendarData'))
                          ->setPaper('a4', 'landscape');

                return $pdf->download('Term-Two-2025-Calendar.pdf');
            }
        } catch (\Exception $e) {
            // If PDF generation fails, create a simple HTML version for download
        }

        // Fallback: Create a simple HTML version that can be printed
        $html = $this->generateSimpleCalendarHTML($calendarData);

        return response($html)
            ->header('Content-Type', 'text/html')
            ->header('Content-Disposition', 'attachment; filename="Term-Two-2025-Calendar.html"');
    }

    /**
     * Generate simple HTML for download/printing
     */
    private function generateSimpleCalendarHTML($calendarData)
    {
        $html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>' . $calendarData['subtitle'] . '</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #002366; padding-bottom: 15px; }
        .header h1 { color: #002366; font-size: 24px; margin: 0; }
        .header p { margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th { background-color: #002366; color: white; padding: 10px; text-align: center; border: 1px solid #ccc; }
        td { border: 1px solid #ccc; padding: 8px; vertical-align: top; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .date-cell { text-align: center; font-weight: bold; background-color: #f0f4f8; }
        .notes { margin-top: 30px; }
        .notes h2 { color: #002366; border-bottom: 1px solid #002366; padding-bottom: 5px; }
        .notes ul { list-style-type: disc; margin-left: 20px; }
        .notes li { margin-bottom: 8px; }
        @media print { body { margin: 0; } }
    </style>
</head>
<body>
    <div class="header">
        <h1>' . $calendarData['title'] . '</h1>
        <p style="font-size: 18px; font-weight: bold;">' . $calendarData['subtitle'] . '</p>
        <p>📞 ' . implode(' / ', $calendarData['contacts']) . '</p>
    </div>

    <table>
        <thead>
            <tr>';

        foreach($calendarData['months'] as $month) {
            $html .= '<th colspan="2">' . $month['name'] . '</th>';
        }

        $html .= '</tr><tr>';

        foreach($calendarData['months'] as $month) {
            $html .= '<th>DATE</th><th>DAY</th>';
        }

        $html .= '</tr></thead><tbody>';

        $maxRows = max(array_map(function($month) { return count($month['days']); }, $calendarData['months']));

        for($i = 0; $i < $maxRows; $i++) {
            $html .= '<tr>';
            foreach($calendarData['months'] as $month) {
                if(isset($month['days'][$i])) {
                    $html .= '<td class="date-cell">' . $month['days'][$i][0] . '</td>';
                    $html .= '<td>' . $month['days'][$i][1] . '</td>';
                } else {
                    $html .= '<td></td><td></td>';
                }
            }
            $html .= '</tr>';
        }

        $html .= '</tbody></table>

    <div class="notes">
        <h2>Important Notes</h2>
        <ul>';

        foreach($calendarData['notes'] as $note) {
            $html .= '<li>' . $note . '</li>';
        }

        $html .= '</ul>
    </div>

    <div style="margin-top: 40px; text-align: center; border-top: 1px solid #ccc; padding-top: 15px; color: #666;">
        <p>St. Francis of Assisi Private School | 1310/4 East Kamenza, Chililabombwe, Zambia</p>
        <p>📞 ' . implode(' / ', $calendarData['contacts']) . ' | 📧 info@stfrancisofassisizm.com</p>
    </div>
</body>
</html>';

        return $html;
    }

    /**
     * Get calendar data for Term Two 2025
     */
    private function getTermTwoCalendarData()
    {
        return [
            'title' => 'PRE-SCHOOL, PRIMARY & SECONDARY',
            'subtitle' => 'TERM TWO 2025 CALENDAR',
            'contacts' => ['0972266217', '0962373873'],
            'months' => [
                'may' => [
                    'name' => 'MAY',
                    'days' => [
                        ['12', 'MONDAY WEEK 1'],
                        ['13', 'TUESDAY'],
                        ['14', 'WEDNESDAY'],
                        ['15', 'THURSDAY'],
                        ['16', 'FRIDAY'],
                        ['17', 'SATURDAY'],
                        ['18', 'SUNDAY'],
                        ['19', 'MONDAY WEEK 2'],
                        ['20', 'TUESDAY'],
                        ['21', 'WEDNESDAY'],
                        ['22', 'THURSDAY'],
                        ['23', 'FRIDAY MASS'],
                        ['24', 'SATURDAY'],
                        ['25', 'SUNDAY HOLIDAY'],
                        ['26', 'MONDAY WEEK 3'],
                        ['27', 'TUESDAY'],
                        ['28', 'WEDNESDAY'],
                        ['29', 'THURSDAY'],
                        ['30', 'FRIDAY MASS'],
                        ['31', 'SATURDAY'],
                        ['01', 'SUNDAY'],
                        ['02', 'MONDAY WEEK 4'],
                        ['03', 'TUESDAY'],
                        ['04', 'WEDNESDAY'],
                        ['05', 'THURSDAY'],
                        ['06', 'FRIDAY'],
                        ['07', 'SATURDAY'],
                        ['08', 'SUNDAY'],
                        ['09', 'MONDAY WEEK 5'],
                        ['10', 'TUESDAY'],
                        ['11', 'WEDNESDAY'],
                    ]
                ],
                'june' => [
                    'name' => 'JUNE',
                    'days' => [
                        ['12', 'THURSDAY'],
                        ['13', 'FRIDAY MASS'],
                        ['14', 'SATURDAY'],
                        ['15', 'SUNDAY'],
                        ['16', 'MONDAY WEEK 6'],
                        ['17', 'TUESDAY'],
                        ['18', 'WEDNESDAY'],
                        ['19', 'THURSDAY'],
                        ['20', 'FRIDAY'],
                        ['21', 'SATURDAY'],
                        ['22', 'SUNDAY'],
                        ['23', 'MONDAY WEEK 7'],
                        ['24', 'TUESDAY'],
                        ['25', 'WED REMINDERS'],
                        ['26', 'THURSDAY'],
                        ['27', 'FRIDAY'],
                        ['28', 'SATURDAY'],
                        ['29', 'SUNDAY'],
                        ['30', 'MONDAY WEEK 8'],
                        ['01', 'TUESDAY'],
                        ['02', 'WEDNESDAY'],
                        ['03', 'THURSDAY'],
                        ['04', 'FRIDAY'],
                        ['05', 'SAT MORNING'],
                        ['06', 'SUNDAY'],
                        ['07', 'MONDAY WEEK 9'],
                        ['08', 'TUES EXCLUSIONS'],
                        ['09', 'WED MORNING'],
                        ['10', 'THURSDAY'],
                        ['11', 'FRIDAY MASS'],
                        ['12', 'SATURDAY'],
                    ]
                ],
                'july' => [
                    'name' => 'JULY',
                    'days' => [
                        ['13', 'SUNDAY'],
                        ['14', 'MONDAY WEEK 10'],
                        ['15', 'TUESDAY'],
                        ['16', 'WEDNESDAY'],
                        ['17', 'THURSDAY'],
                        ['18', 'FRIDAY MASS'],
                        ['19', 'SATURDAY'],
                        ['20', 'SUNDAY'],
                        ['21', 'MONDAY WEEK 11'],
                        ['22', 'TUESDAY'],
                        ['23', 'WEDNESDAY'],
                        ['24', 'THURSDAY'],
                        ['25', 'FRIDAY REMINDERS'],
                        ['26', 'SATURDAY'],
                        ['27', 'SUNDAY'],
                        ['28', 'MONDAY WEEK 12'],
                        ['29', 'TUESDAY TESTS STARTS'],
                        ['30', 'WEDNESDAY'],
                        ['31', 'THURSDAY'],
                        ['01', 'FRIDAY MASS'],
                        ['02', 'SATURDAY'],
                        ['03', 'SUNDAY'],
                        ['04', 'MONDAY WEEK 13'],
                        ['05', 'TUESDAY TESTS ENDS'],
                        ['06', 'WED SCHOOL CLOSES'],
                        ['07', 'THUR PREPARATIONS'],
                        ['08', 'FRIDAY OPEN DAY'],
                        ['09', 'SATURDAY'],
                        ['10', 'SUNDAY'],
                        ['11', 'MONDAY'],
                        ['12', 'TUESDAY'],
                    ]
                ],
                'august' => [
                    'name' => 'AUGUST',
                    'days' => [
                        ['13', 'WEDNESDAY'],
                        ['14', 'THURSDAY'],
                        ['15', 'FRIDAY'],
                        ['16', 'SATURDAY'],
                        ['17', 'SUNDAY'],
                    ]
                ]
            ],
            'notes' => [
                'END OF TERM TESTS: 29th JULY to 1st & 5th AUGUST (PRIMARY SECTION)',
                '24th JULY to 1st AUGUST (SECONDARY SECTION)',
                'FRUIT AND WATER DAYS: 30th MAY, 27th JUNE AND 25th JULY',
                'MASS: 23rd MAY, 13th JUNE AND 18th JULY 2025 AND 1st AUGUST',
                'PUBLIC HOLIDAYS: 26th MAY, 30th MAY, 1st JULY, 4th AUGUST',
                'SCHOOL CLOSES: 6th AUGUST',
                'OPEN DAY: 8th AUGUST',
                'SCHOOL FEES REMINDERS: 26th MAY, 25th JUNE AND 25 JULY',
                'SCHOOL FEES EXCLUSION FROM CLASSES: 9th JUNE & 7th JULY',
                'EDUCATIONAL TOURS: PLACES, AMOUNTS AND DATES TO BE COMMUNICATED LATER'
            ]
        ];
    }
}
