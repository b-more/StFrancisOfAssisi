<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticesController extends Controller
{
    /**
     * Display the notices index page.
     */
    public function index()
    {
        $notices = $this->getAllNotices();
        return view('notices.index', compact('notices'));
    }

    /**
     * Display a specific notice.
     */
    public function show($slug)
    {
        $notice = $this->getNoticeBySlug($slug);

        if (!$notice) {
            abort(404);
        }

        return view('notices.show', compact('notice'));
    }

    /**
     * Display the Term Two bulletin.
     */
    public function termTwoBulletin()
    {
        $bulletin = $this->getTermTwoBulletinData();
        return view('notices.term-two-bulletin', compact('bulletin'));
    }

    /**
     * Download the Term Two bulletin as PDF.
     */
    public function downloadTermTwoBulletin()
    {
        $bulletin = $this->getTermTwoBulletinData();

        // Generate PDF or HTML download
        $html = $this->generateBulletinHTML($bulletin);

        return response($html)
            ->header('Content-Type', 'text/html')
            ->header('Content-Disposition', 'attachment; filename="Term-Two-School-Bulletin.html"');
    }

    /**
     * Get all notices for listing.
     */
    private function getAllNotices()
    {
        return [
            [
                'id' => 1,
                'title' => 'Term Two School Bulletin',
                'slug' => 'term-two-bulletin',
                'date' => '16th May, 2025',
                'category' => 'General Information',
                'excerpt' => 'Important information for Term Two including school policies, fees, and schedules.',
                'priority' => 'high'
            ],
            [
                'id' => 2,
                'title' => 'Health and Safety Guidelines',
                'slug' => 'health-safety-guidelines',
                'date' => '10th May, 2025',
                'category' => 'Health & Safety',
                'excerpt' => 'Updated health protocols and safety measures for all students and staff.',
                'priority' => 'high'
            ],
            [
                'id' => 3,
                'title' => 'Sports Day Announcement',
                'slug' => 'sports-day-announcement',
                'date' => '5th May, 2025',
                'category' => 'Events',
                'excerpt' => 'Annual sports day scheduled for June 15th, 2025. Preparation guidelines enclosed.',
                'priority' => 'medium'
            ]
        ];
    }

    /**
     * Get notice by slug.
     */
    private function getNoticeBySlug($slug)
    {
        $notices = $this->getAllNotices();
        return collect($notices)->firstWhere('slug', $slug);
    }

    /**
     * Get Term Two bulletin data.
     */
    private function getTermTwoBulletinData()
    {
        return [
            'title' => 'Term Two School Bulletin',
            'date' => '16th May, 2025',
            'reference' => 'Term Two School Bulletin',
            'recipient' => 'Parents/Guardians',
            'header' => [
                'school_name' => 'ST. FRANCIS OF ASSISI PRIVATE SCHOOL',
                'address' => 'PLOT NO. 1310/4 KAMENZA EAST, CHILILABOMBWE, ZAMBIA',
                'phones' => ['+260 972266217', '+260962373873'],
                'email' => 'st.francischililabombwe@gmail.com'
            ],
            'notices' => [
                'School management would like to welcome both our new and old learners to term two.',
                'School management looks forward to feedback on the progress of your child.',
                'Parents/guardians are encouraged to pass through the reception desk for any help that you might need.',
                'Parents/guardians are urged to sign at the gate in the visitor\'s book.',
                'Be informed that all our classrooms are out of bounce to parents/guardians to avoid learning interruption.',
                'Due to cholera outbreak in some places, all pupils are advised to carry hand sanitizer for personal hygiene.',
                'Parents/guardians are urged to observe punctuality and avoid late picking to our learners.',
                'All learners are urged to wear the right uniform and observe recommended hair style at all times.',
                'Learners are advised to wear best shirts on Wednesdays and truck suits on Fridays only.',
                'Parents are encouraged to pay spellathone money to class/grade teachers.',
                'All parents are advised to ensure that PTA/computer/maintenance levy is paid without fail.',
                'Kindly ensure that school requirements are provided to every child and a realm of bond paper.',
                'School fees stands as follows: Preschool K1600, Primary K1900 & Secondary K2500. Only paid up pupils must report to school with proof of payment to show their class/grade teachers.',
                'Bus levy has remained the same at K500 per month. Pupils are urged to show proof of payment to the driver. Only paid up pupils will be picked on Monday 13th January, 2025.',
                'Mass has been scheduled to take place four times as shown in the school calendar. Kindly prepare offering for your child to promote good practice.',
                'Fruit day has been scheduled to take place three times in a term as shown on the calendar.',
                'School will close on Wednesday 6th August, 2025.',
                'Open day will be conducted on Friday 8th August, 2025 from 08:00 to 15:00 hours.',
                'Use the following Bank accounts for:',
                'Timetables for examination classes are out at grade 7, 9 internal/external & 12 levels.',
                'All pupils/parents/guardians are urged to observe and follow set school rules to avoid inconveniences at all cost.'
            ],
            'bank_accounts' => [
                'School Fees: Indo bank: 017204000103',
                'Bus/Uniform: Indo bank: 017204000104'
            ],
            'signature' => 'BY MANAGEMENT'
        ];
    }

    /**
     * Generate HTML for bulletin download.
     */
    private function generateBulletinHTML($bulletin)
    {
        $html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>' . $bulletin['title'] . '</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        .header { text-align: center; border-bottom: 2px solid #002366; padding-bottom: 20px; margin-bottom: 30px; }
        .header h1 { color: #002366; margin: 0; font-size: 18px; }
        .header p { margin: 5px 0; font-size: 12px; }
        .bulletin-info { margin-bottom: 20px; }
        .bulletin-info p { margin: 5px 0; }
        .notice-item { margin-bottom: 15px; display: flex; align-items: flex-start; }
        .notice-number { background: #002366; color: white; padding: 5px 10px; border-radius: 50%; margin-right: 15px; font-weight: bold; min-width: 30px; text-align: center; }
        .notice-text { flex: 1; }
        .bank-accounts { background: #f8f9fa; padding: 15px; border-left: 5px solid #002366; margin: 20px 0; }
        .signature { text-align: right; margin-top: 40px; font-weight: bold; }
        @media print { body { margin: 0; } }
    </style>
</head>
<body>
    <div class="header">
        <h1>' . $bulletin['header']['school_name'] . '</h1>
        <p>' . $bulletin['header']['address'] . '</p>
        <p>' . implode(' | ', $bulletin['header']['phones']) . '</p>
        <p>Email: ' . $bulletin['header']['email'] . '</p>
    </div>

    <div class="bulletin-info">
        <p><strong>Date:</strong> ' . $bulletin['date'] . '</p>
        <p><strong>Attention:</strong> ' . $bulletin['recipient'] . '</p>
        <p><strong>Reference:</strong> ' . $bulletin['reference'] . '</p>
        <p><strong>Greetings!</strong></p>
        <p>Kindly take note of the following:</p>
    </div>';

        foreach($bulletin['notices'] as $index => $notice) {
            if ($notice === 'Use the following Bank accounts for:') {
                $html .= '<div class="notice-item">
                    <div class="notice-number">' . ($index + 1) . '</div>
                    <div class="notice-text">' . $notice . '</div>
                </div>
                <div class="bank-accounts">';
                foreach($bulletin['bank_accounts'] as $account) {
                    $html .= '<p style="margin: 5px 0;">' . $account . '</p>';
                }
                $html .= '</div>';
            } else {
                $html .= '<div class="notice-item">
                    <div class="notice-number">' . ($index + 1) . '</div>
                    <div class="notice-text">' . $notice . '</div>
                </div>';
            }
        }

        $html .= '<div class="signature">' . $bulletin['signature'] . '</div>
</body>
</html>';

        return $html;
    }
}
