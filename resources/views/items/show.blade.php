<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item['name'] }} | WanderList PH</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ocean: #0f172a;
            --sunset: linear-gradient(135deg, #f59e0b 0%, #ef4444 100%);
            --island-green: #10b981;
            --sand: #f8fafc;
            --ink: #1e293b;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--sand);
            background-image: radial-gradient(circle at 2px 2px, #e2e8f0 1px, transparent 0);
            background-size: 32px 32px;
            color: var(--ink);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 650px;
            width: 100%;
            position: relative;
        }

        /* The Outer Shadow Layer */
        .container::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: -15px;
            bottom: -15px;
            background: var(--ocean);
            z-index: 0;
            clip-path: polygon(0 0, 100% 0, 100% 95%, 95% 100%, 0 100%);
        }

        .details-card {
            position: relative;
            z-index: 1;
            background: #ffffff;
            border: 3px solid var(--ocean);
            padding: 50px;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 95%, 95% 100%, 0 100%);
        }

        .badge {
            background: transparent;
            color: var(--ocean);
            padding: 8px 20px;
            border: 2px solid var(--ocean);
            border-radius: 0; /* Keep it sharp */
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            display: inline-block;
        }

        h1 {
            font-size: 3.5rem;
            margin: 10px 0;
            letter-spacing: -2px;
            text-transform: uppercase;
            line-height: 0.9;
            color: var(--ocean);
        }

        .location {
            font-size: 1.1rem;
            color: var(--island-green);
            font-weight: 700;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .description {
            text-align: left;
            line-height: 1.8;
            color: #334155;
            padding: 30px;
            background: #f1f5f9;
            border-left: 6px solid var(--ocean);
            margin-bottom: 30px;
            font-size: 1.05rem;
        }

        .info-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-weight: 800;
            color: var(--ocean);
            padding: 20px;
            border-top: 2px dashed #cbd5e1;
        }

        .best-time-label {
            background: var(--sunset);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 1.1rem;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            color: var(--ocean);
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            transition: all 0.2s ease;
            border-bottom: 2px solid transparent;
        }

        .back-link:hover {
            color: #ef4444;
            border-bottom: 2px solid #ef4444;
            transform: translateX(-5px);
        }

        @media (max-width: 600px) {
            h1 { font-size: 2.5rem; }
            .details-card { padding: 30px 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="details-card">
            <span class="badge">{{ $item['type'] }}</span>
            <h1>{{ $item['name'] }}</h1>
            <p class="location">📍 {{ $item['location'] }}</p>

            <div class="description">
                {{ $item['description'] }}
            </div>

            <div class="info-row">
                <span>Best season:</span>
                <span class="best-time-label">{{ $item['best_time'] }}</span>
            </div>

            <a href="{{ url('/items') }}" class="back-link">← Return to Explorer</a>
        </div>
    </div>
</body>
</html>
