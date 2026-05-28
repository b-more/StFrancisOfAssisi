<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $formType }} submission</title>
</head>
<body style="font-family: -apple-system, Segoe UI, Roboto, sans-serif; color:#222; line-height:1.5;">
    @php
        $labels = [
            'contact'     => 'New contact enquiry',
            'admissions'  => 'New admissions application',
            'newsletter'  => 'New newsletter subscriber',
        ];
        $heading = $labels[$formType] ?? 'New website form submission';
    @endphp

    <h2 style="margin:0 0 12px;">{{ $heading }}</h2>
    <p style="color:#666; margin:0 0 16px;">
        Submitted via {{ config('app.name') }} website at {{ now()->format('Y-m-d H:i') }} ({{ config('app.timezone') }}).
    </p>

    <table cellpadding="6" cellspacing="0" border="0" style="border-collapse:collapse; width:100%; max-width:560px;">
        @foreach ($payload as $key => $value)
            <tr style="border-bottom:1px solid #eee;">
                <td style="vertical-align:top; font-weight:600; width:170px; color:#444;">
                    {{ str_replace('_', ' ', ucfirst($key)) }}
                </td>
                <td style="vertical-align:top;">
                    @if (is_scalar($value) || $value === null)
                        {{ $value ?? '—' }}
                    @else
                        <pre style="margin:0; white-space:pre-wrap;">{{ json_encode($value, JSON_PRETTY_PRINT) }}</pre>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <p style="margin-top:24px; color:#888; font-size:12px;">
        Hit Reply to respond directly to the submitter (when an email was provided).
    </p>
</body>
</html>
