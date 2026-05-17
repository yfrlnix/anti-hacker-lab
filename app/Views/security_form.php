<!DOCTYPE html>
<html>
<head>
    <title>Anti-Hacker Lab</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f3f0fb;
            min-height: 100vh;
            padding: 48px 24px;
            color: #26215C;
        }

        .card {
            max-width: 620px;
            margin: auto;
            background: #fffffe;
            border: 1px solid #e4dff7;
            border-radius: 20px;
            padding: 36px 36px 32px;
        }

        .header-row {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 6px;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: #EEEDFE;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #534AB7;
            flex-shrink: 0;
        }

        .lab-title {
            font-size: 22px;
            font-weight: 700;
            color: #26215C;
            letter-spacing: -0.02em;
        }

        .lab-sub {
            font-size: 13px;
            color: #888780;
            margin-bottom: 28px;
            padding-left: 58px;
        }

        .section-head {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #888780;
            margin-bottom: 12px;
        }

        .section-head i { font-size: 14px; }

        .tasks-grid {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 28px;
        }

        .task-card {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border-radius: 12px;
            border: 1px solid transparent;
        }

        .task-card.teal   { background: #E1F5EE; border-color: #9FE1CB; }
        .task-card.purple { background: #EEEDFE; border-color: #CECBF6; }
        .task-card.amber  { background: #FAEEDA; border-color: #FAC775; }

        .task-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .task-card.teal   .task-icon { background: #9FE1CB; color: #085041; }
        .task-card.purple .task-icon { background: #CECBF6; color: #3C3489; }
        .task-card.amber  .task-icon { background: #FAC775; color: #633806; }

        .task-info { flex: 1; min-width: 0; }

        .task-num {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .task-card.teal   .task-num { color: #0F6E56; }
        .task-card.purple .task-num { color: #534AB7; }
        .task-card.amber  .task-num { color: #854F0B; }

        .task-name {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .task-card.teal   .task-name { color: #085041; }
        .task-card.purple .task-name { color: #3C3489; }
        .task-card.amber  .task-name { color: #633806; }

        .task-code {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            display: inline-block;
            padding: 2px 8px;
            border-radius: 6px;
        }

        .task-card.teal   .task-code { background: #9FE1CB; color: #085041; }
        .task-card.purple .task-code { background: #CECBF6; color: #3C3489; }
        .task-card.amber  .task-code { background: #FAC775; color: #633806; }

        .task-badge {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            flex-shrink: 0;
        }

        .task-card.teal   .task-badge { background: #5DCAA5; color: #085041; }
        .task-card.purple .task-badge { background: #AFA9EC; color: #3C3489; }
        .task-card.amber  .task-badge { background: #EF9F27; color: #633806; }

        .divider {
            height: 1px;
            background: #f0ecfc;
            margin: 8px 0 24px;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #888780;
            margin-bottom: 8px;
        }

        .form-label i { font-size: 14px; color: #7F77DD; }

        input[type="text"] {
            width: 100%;
            background: #faf9fe;
            border: 1.5px solid #CECBF6;
            border-radius: 12px;
            padding: 13px 16px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            color: #26215C;
            outline: none;
            transition: border-color 0.2s;
            margin-bottom: 14px;
        }

        input[type="text"]::placeholder { color: #B4B2A9; }
        input[type="text"]:focus { border-color: #AFA9EC; }

        button[type="submit"] {
            width: 100%;
            padding: 13px 20px;
            background: #7F77DD;
            border: none;
            border-radius: 12px;
            color: #EEEDFE;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: opacity 0.2s, transform 0.15s;
        }

        button[type="submit"]:hover  { opacity: 0.88; transform: translateY(-1px); }
        button[type="submit"]:active { transform: scale(0.99); }

        .output-box {
            margin-top: 16px;
            background: #E1F5EE;
            border: 1px solid #9FE1CB;
            border-radius: 12px;
            padding: 16px 18px;
        }

        .output-label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #0F6E56;
            margin-bottom: 6px;
        }

        .output-label i { font-size: 14px; }

        .output-value {
            font-size: 14px;
            color: #085041;
            font-family: 'JetBrains Mono', monospace;
            word-break: break-all;
        }

    </style>
</head>
<body>

<div class="card">

    <div class="header-row">
        <h1 class="lab-title">The Anti-Hacker Lab</h1>
    </div>
</br>
    <div class="section-head">
        Completed tasks
    </div>

    <div class="tasks-grid">

        <div class="task-card teal">
            <div class="task-icon"><i class="ti ti-toggle-right"></i></div>
            <div class="task-info">
                <p class="task-num">Task 01</p>
                <p class="task-name">Enable CSRF protection</p>
                <span class="task-code">Filters.php</span>
            </div>
            <div class="task-badge"><i class="ti ti-check"></i></div>
        </div>

        <div class="task-card purple">
            <div class="task-icon"><i class="ti ti-forms"></i></div>
            <div class="task-info">
                <p class="task-num">Task 02</p>
                <p class="task-name">Add CSRF token to form</p>
                <span class="task-code">&lt;?= csrf_field() ?&gt;</span>
            </div>
            <div class="task-badge"><i class="ti ti-check"></i></div>
        </div>

        <div class="task-card amber">
            <div class="task-icon"><i class="ti ti-eye-off"></i></div>
            <div class="task-info">
                <p class="task-num">Task 03</p>
                <p class="task-name">Escape user output</p>
                <span class="task-code">&lt;?= esc($name) ?&gt;</span>
            </div>
            <div class="task-badge"><i class="ti ti-check"></i></div>
        </div>

    </div>

    <hr class="divider">

    <div class="section-head">
        <i class="ti ti-test-pipe"></i>
        Security test form
    </div>

    <form method="post" action="<?= site_url('submit') ?>">

        <?= csrf_field() ?>

        <label class="form-label">
            <i class="ti ti-cursor-text"></i>
            Input
        </label>

        <input type="text" name="name" placeholder="Enter any text to test...">

        <button type="submit">
            <i class="ti ti-shield-check"></i>
            Submit securely
        </button>

    </form>

    <?php if (isset($name)): ?>
        <div class="output-box">
            <div class="output-label">
                <i class="ti ti-lock-check"></i>
                Safe output
            </div>
            <p class="output-value"><?= esc($name) ?></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>