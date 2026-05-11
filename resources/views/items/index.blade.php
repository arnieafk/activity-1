<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanderList PH | Explore</title>
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
            background-image:
                radial-gradient(circle at 2px 2px, #e2e8f0 1px, transparent 0);
            background-size: 32px 32px;
            color: var(--ink);
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        header {
            text-align: left;
            padding: 60px 0;
            border-bottom: 4px solid var(--ocean);
            margin-bottom: 50px;
            position: relative;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 120px;
            height: 4px;
            background: var(--sunset);
        }

        h1 {
            font-weight: 800;
            font-size: 3.5rem;
            margin: 0;
            letter-spacing: -2px;
            text-transform: uppercase;
            color: var(--ocean);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 40px;
        }

        .card {
            background: #ffffff;
            border: 2px solid var(--ocean);
            padding: 30px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 90% 100%, 0 100%);
            display: flex;
            flex-direction: column;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 6px;
            left: 6px;
            right: -10px;
            bottom: -10px;
            background: var(--ocean);
            z-index: -1;
            transition: all 0.3s ease;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 90% 100%, 0 100%);
        }

        .card:hover {
            transform: translate(-4px, -4px);
        }

        .card:hover::before {
            transform: translate(6px, 6px);
            background: var(--sunset);
        }

        .badge {
            background: rgba(15, 23, 42, 0.05);
            backdrop-filter: blur(4px);
            color: var(--ocean);
            padding: 6px 14px;
            border: 1px solid var(--ocean);
            font-size: 0.7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            align-self: flex-start;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 0 10px 0;
            color: var(--ocean);
        }

        .location-tag {
            color: var(--island-green);
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn {
            display: block;
            background: var(--ocean);
            color: white;
            text-decoration: none;
            padding: 15px 25px;
            font-weight: 800;
            text-align: center;
            margin-top: auto;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: 2px solid var(--ocean);
        }

        .btn:hover {
            background: transparent;
            color: var(--ocean);
        }

        .empty-state {
            grid-column: 1/-1;
            text-align: center;
            padding: 80px;
            border: 2px dashed #cbd5e1;
            border-radius: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>WanderList PH</h1>
            <p style="font-weight: 600; opacity: 0.7;">Discovered by you, curated by the islands.</p>
        </header>

        <div class="grid">
            @forelse($items as $item)
                <div class="card">
                    <span class="badge">{{ $item['type'] }}</span>
                    <h3>{{ $item['name'] }}</h3>
                    <div class="location-tag">
                        <span>📍</span> {{ $item['location'] }}
                    </div>
                    <a href="{{ url('/items/' . $item['id']) }}" class="btn">Explore Spot</a>
                </div>
            @empty
                <div class="empty-state">
                    <p style="font-size: 1.2rem; font-weight: 600;">No hidden gems found yet.</p>
                    <p style="color: #64748b;">Be the first to map a new destination.</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
