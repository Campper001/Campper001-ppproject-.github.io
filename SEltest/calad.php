<!doctype html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>กรอกคะแนน</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://www.nu.ac.th/wp-content/uploads/2023/01/cropped-Logo-NU-192x192.png" type="image/png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&icon_names=clinical_notes" />
  </head>
  <body class="bg-gray-100 p-6">
<div class="con">
  <div class="">
    
  </div>

  <div class="cal">
    <div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-lg">
      <div class="mb-4 flex items-center justify-between">
        <h2 class="rounded-md bg-orange-400 p-2 text-lg font-bold text-black">Cal_Admission</h2>
        <a href="connect.php"><button class="text-gray-500 hover:text-gray-700">✏️</button></a>
      </div>
      <p class="mb-4 text-sm text-gray-500">*กรุณากรอกเป็น T-Score</p>

      <!-- GPAX -->
      <div class="mb-4">
        <label class="block font-medium py-2">GPAX</label>
        <p>สูงสุด 4.00</p>
        <input
          type="number"
          step="0.01"
          max="4.00"
          min="0.00"
          placeholder="เช่น 3.45"
          class="rounded-md border py-2 px-3 text-gray-600 w-full"
        />
      </div>

      <!-- TGAT -->
      <div class="mb-4">
        <label class="block font-medium">TGAT ความถนัดทั่วไป</label>
        <div class="opacity-65 pb-3 pl-1"><p>คะแนนเต็ม 100 คะแนน/พาร์ท</p></div>
        <div class="grid grid-cols-2 gap-2">
          <input type="number" placeholder="TGAT1 การสื่อสาร" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TGAT2 การคิดวิเคราะห์" class="w-full rounded-md border p-2" />
        </div>
      </div>

      <!-- TPAT -->
      <div class="mb-4">
        <label class="block font-medium">TPAT 1-5 ความถนัดเฉพาะทาง</label>
        <div class="opacity-65 pb-3 pl-1"><p>คะแนนเต็ม 100 คะแนน/พาร์ท</p></div>
        <div class="grid grid-cols-2 gap-2">
          <input type="number" placeholder="TPAT1 กสพท" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT21 ทัศนศิลป์" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT22 ดนตรี" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT23 นาฏศิลป์" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT3 วิทย์-วิศวฯ" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT4 สถาปัตย์" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="TPAT5 ครู" class="w-full rounded-md border p-2" />
        </div>
      </div>

      <!-- A-Level -->
      <div class="mb-4">
        <label class="block font-medium">A-Level</label>
        <div class="opacity-65 pb-3 pl-1"><p>คะแนนเต็ม 100 คะแนน/พาร์ท</p></div>
        <div class="grid grid-cols-2 gap-2 py-2">
          <input type="number" placeholder="คณิตศาสตร์ 1" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="คณิตศาสตร์ 2" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="ฟิสิกส์" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="เคมี" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="ชีววิทยา" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="ไทย" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="อังกฤษ" class="w-full rounded-md border p-2" />
          <input type="number" placeholder="สังคม" class="w-full rounded-md border p-2" />
        </div>
      </div>

      <a href="">
        <button class="w-full rounded-md bg-orange-500 py-2 text-white hover:bg-orange-600">ถัดไป</button>
      </a>
    </div>
  </div>








  </div> 
  </body>
</html>
