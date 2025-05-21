<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Astrid Meilendra - 5026231183</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff8f2;
      margin: 0;
      padding: 40px;
    }

    h1 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 32px;
    }

    p {
      text-align: center;
      margin-bottom: 40px;
      font-size: 18px;
      color: #666;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: auto;
    }

    .card {
      display: flex;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background-color: #fff;
      flex-direction: column;
    }

    .card .top {
      display: flex;
    }

    .card .number {
      flex: 0 0 80px;
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card .title {
      flex: 1;
      display: flex;
      align-items: center;
      padding: 20px;
    }

    .card .title a {
      text-decoration: none;
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      width: 100%;
    }

    /* Warna-warna */
    .blue    { background-color: #4db5f4; }
    .orange  { background-color: #f49057; }
    .green   { background-color: #82b39f; }
    .yellow  { background-color: #f2c265; }
  </style>
</head>
<body>

  <h1>Astrid Meilendra</h1>
  <p>5026231183</p>

  <div class="grid">
    <div class="card">
      <div class="top">
        <div class="number blue">01</div>
        <div class="title blue"><a href="http://127.0.0.1:8000/bootstrap1">Bootstrap</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number orange">02</div>
        <div class="title orange"><a href="http://127.0.0.1:8000/heperlog">Heperlog</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number green">03</div>
        <div class="title green"><a href="http://127.0.0.1:8000/index">Index</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number yellow">04</div>
        <div class="title yellow"><a href="http://127.0.0.1:8000/js1">JS1</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number blue">05</div>
        <div class="title blue"><a href="http://127.0.0.1:8000/js2">JS2</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number orange">06</div>
        <div class="title orange"><a href="http://127.0.0.1:8000/pertama">Pertama</a></div>
      </div>
    </div>

    <div class="card">
      <div class="top">
        <div class="number green">07</div>
        <div class="title green"><a href="http://127.0.0.1:8000/tugaslinktree">Tugas Linktree</a></div>
      </div>
    </div>
  </div>

</body>
</html>
