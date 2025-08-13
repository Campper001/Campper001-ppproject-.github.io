<?php
// รวมไฟล์ connect.php เพื่อเชื่อมต่อกับฐานข้อมูล
include('connect.php');
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPTCAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="js/savedata/salM.js"></script>
    <script defer src="js/calm.js"></script>
    
    <style>
        @layer utilities {
          .text-stroke {
            -webkit-text-stroke: 0.5px black;
            text-stroke: 0.5px black;
          }
        
          .text-stroke-white {
            -webkit-text-stroke: 1px white;
            text-stroke: 1px white;
          }
        
          .text-stroke-2 {
            -webkit-text-stroke-width: 2px;
            text-stroke-width: 2px;
          }
          .min div.block {
              background-color: #f0f4f8;
              padding: 8px;
              margin-top: 4px;
              border-left: 4px solid #f97316;
          }
          .CONdi div.block {
              background-color: #f0f4f8;
              padding: 8px;
              margin-top: 4px;
              border-left: 4px solid #f97316;
          }
          .CORE div.block {
              background-color: #f0f4f8;
              padding: 8px;
              margin-top: 4px;
              border-left: 4px solid #f97316;
          }
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-4 right-4 bg-orange-500 text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition">
        <img src="img/goup.svg" alt="Scroll to Top" class="w-6 h-6">
    </button>
    
    <div id="calBox" class="cal pb-5">
        <div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-lg">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="rounded-md bg-red-400 p-2 text-lg font-bold text-black">Score_Admission</h2>
                <a href="index.php">
                    <img class="bg-red-500 rounded" src="img/main.svg" alt="">
                </a>
            </div>

            <!-- เริ่ม: เนื้อหาที่จะถูกย่อ/ขยาย -->
            <div id="calContent">
                <p class="mb-4 text-xs text-gray-500">*กรุณากรอกเป็น T-Score</p>
                <p class="opacity-65 mb-5 sm:hidden">- - - - - - - - - - - - - - - - - -  - - - - - - - - -</p>
                <p class="opacity-65 mb-5 hidden sm:block">- - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -</p>

                <!-- GPAX -->
                <div class="mb-4">
                    <label for="gpx" class="block font-bold text-xl underline text-orange-600">GPAX</label>
                    <p class="text-gray-500 opacity-65 pb-2 text-xs pt-0.5">สูงสุด 4.00*</p>
                    <input type="number" id="ingpx" step="0.01" max="4.00" min="0.00" placeholder="4.00" class="peer w-1/2 rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                </div>

                <p class="opacity-65 mb-5 sm:hidden">- - - - - - - - - - - - - - - - - -  - - - - - - - - -</p>
                <p class="opacity-65 mb-5 hidden sm:block">- - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -</p>

                <!-- TGAT -->
                <div class="mb-4">
                    <label class="block font-bold text-xl underline text-orange-600">TGAT ความถนัดทั่วไป</label>
                    <div class="text-gray-500 opacity-65 pb-2 text-xs pt-0.5"><p>คะแนนเต็ม 100 คะแนน/พาร์ท*</p></div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label for="Tgat1" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TGAT1-อังกฤษ</label>
                            <input type="number" id="inTgat1" placeholder="100.00" class= "block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tgat2" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TGAT2-คิดเหตุผล</label>
                            <input type="number" id="inTgat2" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tgat3" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TGAT3-สมรรถนะ</label>
                            <input type="number" id="inTgat3" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                    </div>
                </div>

                <p class="opacity-65 mb-5 sm:hidden">- - - - - - - - - - - - - - - - - -  - - - - - - - - -</p>
                <p class="opacity-65 mb-5 hidden sm:block">- - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -</p>

                <!-- TPAT -->
                <div class="mb-4">
                    <label class="block font-bold text-xl underline text-orange-600">TPAT 1-5 ความถนัดเฉพาะทาง</label>
                    <div class="text-gray-500 opacity-65 pb-2 text-xs pt-0.5"><p>คะแนนเต็ม 100 คะแนน/พาร์ท*</p></div>
                    <div class="grid grid-cols-3 gap-2 gap-y-4">
                        <div>
                            <label for="Tpat1" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT1-เชาว์</label>
                            <input type="number" id="inTpat1" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat12" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT1.2-จริยธรรม</label>
                            <input type="number" id="inTpat12" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat13" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT1.3-เชื่อมโยง</label>
                            <input type="number" id="inTpat13" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat21" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT2.1-ทัศนศิลป์</label>
                            <input type="number" id="inTpat21" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat22" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT2.2-ดนตรี</label>
                            <input type="number" id="inTpat22" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat23" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT2.3-นาฏศิลป์</label>
                            <input type="number" id="inTpat23" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat3" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT3-วิทย์-วิศวฯ</label>
                            <input type="number" id="inTpat3" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat4" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT4-สถาปัตย์</label>
                            <input type="number" id="inTpat4" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="Tpat5" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">TPAT5-ครู</label>
                            <input type="number" id="inTpat5" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                    </div>
                </div>

                <p class="opacity-65 mb-5 sm:hidden">- - - - - - - - - - - - - - - - - -  - - - - - - - - -</p>
                <p class="opacity-65 mb-5 hidden sm:block">- - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -</p>

                <!-- A-Level -->
                <div class="mb-4">
                    <label class="block font-bold text-xl underline text-orange-600">A-Level</label>
                    <div class="text-gray-500 opacity-65 pb-2 text-xs"><p>คะแนนเต็ม 100 คะแนน/พาร์ท*</p></div>
                    <div class="grid grid-cols-3 gap-2 gap-y-4">
                        <div>
                            <label for="AL1" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-คณิต1</label>
                            <input type="number" id="inAL1" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="AL2" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-คณิต2</label>
                            <input type="number" id="inAL2" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALsci" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-วิทย์ทั่วไป</label>
                            <input type="number" id="inALsci" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALphy" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-ฟิสิกส์</label>
                            <input type="number" id="inALphy" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALchm" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-เคมี</label>
                            <input type="number" id="inALchm" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALbio" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-ชีววิทยา</label>
                            <input type="number" id="inALbio" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALscd" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-สังคมศึกษา</label>
                            <input type="number" id="inALscd" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALthi" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-ภาษาไทย</label>
                            <input type="number" id="inALthi" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALeng" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-อังกฤษ</label>
                            <input type="number" id="inALeng" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALfan" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-ฝรั่งเศส</label>
                            <input type="number" id="inALfan" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALger" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-เยอรมัน</label>
                            <input type="number" id="inALger" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALjap" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-ญี่ปุ่น</label>
                            <input type="number" id="inALjap" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALkor" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-เกาหลี</label>
                            <input type="number" id="inALkor" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALchi" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-จีน</label>
                            <input type="number" id="inALchi" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALbai" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-บาลี</label>
                            <input type="number" id="inALbai" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                        <div>
                            <label for="ALsph" class="block text-[10px] sm:text-xs text-gray-700 bg-white pb-0.5 mb-1 peer-focus:text-red-500 font-medium">A-Level-สเปน</label>
                            <input type="number" id="inALsph" placeholder="100.00" class="block peer w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:border-red-500 focus:text-red-500 focus:font-bold transition-colors duration-300 placeholder-gray-500 placeholder-opacity-65 placeholder:text-lg" />
                        </div>
                    </div>
                </div>

                <p class="opacity-65 mb-5 sm:hidden">- - - - - - - - - - - - - - - - - -  - - - - - - - - -</p>
                <p class="opacity-65 mb-5 hidden sm:block">- - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - -</p>

                <div class="flex m-4">
                  <button onclick="savedata()" class="w-full rounded-md bg-green-700 py-2 text-white hover:bg-green-600 duration-300 mx-2">บันทึก</button>
                  <button onclick="setdata()" class="w-full rounded-md bg-red-700 py-2 text-white hover:bg-red-600 duration-300 mx-2">รีเซ็ท</button>
                </div>
            </div>
            <!-- ปุ่มย่อ -->
            <div class="small text-xs flex justify-center pt-5 cursor-pointer">
                <p onclick="toggleCal()">ย่อหน้าต่าง 🠕</p>
            </div>
        </div>
    </div>

    <div class="max-w-lg mx-auto bg-white p-6 shadow-lg">
        <div class="bg-orange-900 text-white py-2 px-4 rounded-t-md font-bold">
            เลือกโปรแกรมคำนวณที่ต้องการ
        </div>
        <div class="mt-4">
            <form id="UNform" method="POST" action="">
                <!-- Dropdown for University -->
                <div class="mt-4">
                    <label class="block font-medium text-xs">เลือกมหาวิทยาลัย:</label>
                    <select id="UN" name="UN" class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-orange-500">
                        <option value="" disabled selected>เลือกมหาวิทยาลัย</option>
                        <?php
                        $sql = "SELECT DISTINCT `UN` FROM admission_rcttest WHERE `UN` IS NOT NULL ORDER BY `UN`";
                        $result = $conn->query($sql);
                        $universityMapping = [
                            'NU' => 'มหาวิทยาลัยนเรศวร',
                            'CU' => 'จุฬาลงกรณ์มหาวิทยาลัย',
                            'KU' => 'มหาวิทยาลัยเกษตรศาสตร์',
                            'KKU' => 'มหาวิทยาลัยขอนแก่น',
                            'KMUTNB' => 'มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ',
                        ];
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $universityCode = $row['UN'];
                                $universityName = isset($universityMapping[$universityCode]) ? $universityMapping[$universityCode] : $universityCode;
                                echo '<option value="' . $universityCode . '">' . $universityName . '</option>';
                            }
                        } else {
                            echo '<option value="">ไม่พบข้อมูล</option>';
                        }
                        ?>
                    </select>
                </div>

                <!-- Select for FA_cla -->
                <div class="mb-4 mt-4">
                    <label for="FA_cla" class="block font-medium text-xs">เลือกคณะที่สนใจ:</label>
                    <button type="button" id="facultyButton" class="w-full p-2 border border-gray-300 rounded-md bg-gray-200 text-gray-700" onclick="openModal()">
                        เลือกคณะ
                    </button>
                    <input type="hidden" name="FA_cla" id="selectedFA">
                </div>
                <button type="submit" class="w-full rounded-md bg-orange-500 py-2 text-white hover:bg-orange-600 duration-300">ส่งตรวจเช็คข้อมูล</button>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-lg font-semibold mb-4">เลือกคณะที่สนใจ</h2>
            <input type="text" id="search" placeholder="ค้นหาคณะ..." class="w-full p-2 border border-gray-300 rounded-md mb-2">
            <div class="max-h-60 overflow-y-auto border rounded-md">
                <ul id="facultyList" class="p-2">
                    <?php
                       $sql = "SELECT DISTINCT `FA-cla` FROM admission_rcttest WHERE `FA-cla` IS NOT NULL ORDER BY `FA-cla`";
                       $result = $conn->query($sql);

                       if (empty($_POST["UN"])) {
                           echo "กรุณาเลือกมหาวิทยาลัยก่อน";
                       } elseif ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                               echo '<li class="p-2 hover:bg-gray-200 cursor-pointer" onclick="selectFA(\'' . $row['FA-cla'] . '\')">' . $row['FA-cla'] . '</li>';
                           }
                       } else {
                           echo '<li class="p-2 text-gray-500">ไม่พบข้อมูล</li>';
                       }
                    ?>
                </ul>
            </div>
            <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md w-full" onclick="closeModal()">ปิด</button>
        </div>
    </div>
    
    <div id="GG" class="max-w-lg mx-auto bg-white p-6 shadow-lg mt-5 rounded-lg w-auto hidden">
        <div class="header flex items-start justify-between">
            <div class="logo bg-gray-200 rounded-lg w-fit px-3 py-1 mr-0.5 sm:mr-2">
                <div class="flex items-center mb-1">
                    <img class="w-8 h-8 mr-3 bg-white rounded-full" id="UNLogo" src="" alt="">
                    <h1 id="UNname" class="font-bold text-[12px] sm:text-[15px]"></h1>
                </div>
                <div>
                    <h1 id="FAsel" class="text-[10px] sm:text-[14px] text-gray-700"></h1>
                </div>
            </div>
            <div class="score">
                <div class="w-20 h-20 bg-green-500 rounded-lg border-2 border-orange-500 mt-1.5">
                    <div class="block text-center items-center mt-1.5">
                        <h2 class="text-[12px] font-bold text-black">คะแนน</h2>
                        <h1 class="text-lg font-bold text-red-500 text-stroke" id="SCX"></h1>
                        <h2 class="text-xs font-bold text-black">เต็ม 100</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="tr mt-4">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2 text-xs font-bold">ปี</th>
                        <th class="border p-2 text-xs font-bold">รอบประมวล</th>
                        <th class="border p-2 text-xs font-bold">สูงสุด</th>
                        <th class="border p-2 text-xs font-bold">ต่ำสุด</th>
                        <th class="border p-2 text-xs font-bold">ยอดรับ</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 border p-2 text-xs font-bold text-center">
                    <tr>
                        <td class="border p-2">68</td>
                        <td class="border p-2">NULL</td>
                        <td class="border p-2">NULL</td>
                        <td class="border p-2">NULL</td>
                        <td class="text-green-500 font-bold" id="rec" class="border p-2">N/A</td>
                    </tr>
                    <tr>
                        <td class="border p-2" rowspan="2">67</td>
                        <td class="border p-2 text-orange-500 font-semibold">รอบ 1</td>
                        <td id="mx1" class="border p-2"></td>
                        <td id="mi1" class="border p-2"></td>
                        <td class="border p-2" rowspan="2">NULL</td>
                    </tr>
                    <tr>
                        <td class="border p-2 text-orange-500 font-semibold">รอบ 2</td>
                        <td id="mx2" class="border p-2"></td>
                        <td id="mi2" class="border p-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="min mt-4 bg-gray-100 p-4 rounded-md ">
            <div class="flex justify-between items-center">
                 <h3 class="font-bold text-lg text-red-600 ">สูตรการคำนวณคะแนน</h3>
                 <p class="CLS w-8 cursor-pointer"> 
                    <img id="iconToggle" src="img/ARDW.svg" alt="">
                </p>
            </div >
                <div id="min">
                    <div id="gpx_weg"   class="hidden text-xs text-gray-700 bg-white  rounded-md ">คะแนนผลการเรียน {{gpx}} %</div>
                    <div id="Tgat1_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TGAT {Tgat} %</div>
                    <div id="Tgat_weg"  class="hidden text-xs text-gray-700 bg-white  rounded-md ">TGAT1-อังกฤษ {Tgat1} %</div>
                    <div id="Tgat2_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TGAT2-คิดเหตุผล {Tgat2} %</div>
                    <div id="Tgat3_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TGAT3-สมรรถนะ {Tgat3}%</div>
                    <div id="Tpat1_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TPAT1-เชาว์ {Tpat1} %</div>
                    <div id="Tpat2_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TPAT2-ความถนัดศิลปกรรมศาสตร์ {Tpat2} %</div>
                    <div id="Tpat3_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TPAT3-ความถนัดด้านวิทยาศาสตร์ เทคโนโลยีฯ {Tpat3} %</div>
                    <div id="Tpat4_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TPAT4-สถาปัตย์ {{Tpat4}} %</div>
                    <div id="Tpat5_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">TPAT5-ครู {Tpat5} %</div>
                    <div id="AL1_weg"   class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-คณิต1 {AL1} %</div>
                    <div id="AL2_weg"   class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-คณิต2 {AL2} %</div>
                    <div id="ALsci_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-วิทย์ทั่วไป {ALsci} %</div>
                    <div id="ALphy_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-ฟิสิกส์ {ALphy} %</div>
                    <div id="ALchm_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-เคมี {ALchm} %</div>
                    <div id="ALbio_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-ชีววิทยา {ALbio} %</div>
                    <div id="ALscd_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-สังคมศึกษา {ALscd} %</div>
                    <div id="ALthi_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-ภาษาไทย {ALthi} %</div>
                    <div id="ALeng_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-อังกฤษ {ALeng} %</div>
                    <div id="ALfan_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-ฝรั่งเศส {ALfan} %</div>
                    <div id="ALger_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-เยอรมัน {ALger} %</div>
                    <div id="ALjap_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-ญี่ปุ่น {ALjap} %</div>
                    <div id="ALkor_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-เกาหลี {ALkor} %</div>
                    <div id="ALchi_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-จีน {ALchi} %</div>
                    <div id="ALsph_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-สเปน {ALsph} %</div>
                    <div id="ALbai_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-บาลี {ALbai} %</div>
                    <div id="SEC_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-บาลี {ALbai} %</div>
                    <div id="PCBE1_weg" class="hidden text-xs text-gray-700 bg-white  rounded-md ">A-Level-บาลี {ALbai} %</div>
                </div>
        </div>

        <!-- Minimum Score Requirements -->
        <div class="CONdi mt-4 bg-red-100 p-4 rounded-md">
            <h3 class="font-bold text-lg text-red-600">เงื่อนไขขั้นต่ำที่ต้องใช้</h3>
            <div id="MSGGPAX"       class="hidden text-xs text-gray-700 bg-white  rounded-md">คะแนนผลการเรียนขั้นต่ำ {GPAX}</div>
            <div id="MSGCDM"        class="hidden text-xs text-gray-700 bg-white  rounded-md">จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ คณิตศาสตร์ {GPAX}</div>
            <div id="MSGCDS"        class="hidden text-xs text-gray-700 bg-white  rounded-md">จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ วิทยาศาสตร์และเทคโนโลยี {GPAX}</div>
            <div id="MSGCDE"        class="hidden text-xs text-gray-700 bg-white  rounded-md">จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ ภาษาต่างประเทศ{GPAX}</div>
            <div id="MSGMSTG"       class="hidden text-xs text-gray-700 bg-white  rounded-md">TGAT ขั้นต่ำ {MSTG}</div> 
            <div id="MSGMSTG1"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TGAT1-อังกฤษ ขั้นต่ำ {MSTG1}</div>
            <div id="MSGMSTG2"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TGAT2-คิดเหตุผล ขั้นต่ำ {MSTG2}</div>
            <div id="MSGMSTG3"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TGAT3-สมรรถนะ ขั้นต่ำ {MSTG3}</div>
            <div id="MSGMSTP1"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TPAT1-เชาว์ ขั้นต่ำ {MSTP1}</div>
            <div id="MSGMSTP2"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TPAT2-ความถนัดศิลปกรรมศาสตร์ {MSTP2}</div>
            <div id="MSGMSTP3"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TPAT3-ความถนัดด้านวิทยาศาสตร์ เทคโนโลยีฯ {MSTP3}</div>
            <div id="MSGMSTP4"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TPAT4-สถาปัตย์ ขั้นต่ำ {MSTP4}</div>
            <div id="MSGMSTP5"      class="hidden text-xs text-gray-700 bg-white  rounded-md">TPAT5-ครู ขั้นต่ำ {MSTP5}</div>
            <div id="MSGMSAMath1"   class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-คณิต1 ขั้นต่ำ {MSAMath1}</div>
            <div id="MSGMSAMath2"   class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-คณิต2 ขั้นต่ำ {MSAMath2}</div>
            <div id="MSGMSASci"     class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-วิทย์ทั่วไป ขั้นต่ำ {MSASci}</div> 
            <div id="MSGMSAPhy"     class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-ฟิสิกส์ ขั้นต่ำ {MSAPhy}</div>
            <div id="MSGMSAChe"     class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-เคมี ขั้นต่ำ {MSAChe}</div>
            <div id="MSGMSABio"     class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-ชีววิทยา ขั้นต่ำ {MSABio}</div>
            <div id="MSGMSASoci"    class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-สังคมศึกษา ขั้นต่ำ {MSASoci}</div>
            <div id="MSGMSAThai"    class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-ภาษาไทย ขั้นต่ำ {MSAThai}</div>
            <div id="MSGMSAEnglish" class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-อังกฤษ ขั้นต่ำ {MSAEnglish}</div>
            <div id="MSGMSAFrench"  class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-ฝรั่งเศส ขั้นต่ำ {MSAFrench}</div>
            <div id="MSGMSAGerman"  class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-เยอรมัน ขั้นต่ำ {MSAGerman}</div>
            <div id="MSGMSAJapan"   class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-ญี่ปุ่น ขั้นต่ำ {MSAJapan}</div>
            <div id="MSGMSAKorean"  class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-เกาหลี ขั้นต่ำ {MSAKorean}</div>
            <div id="MSGMSAchinese" class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-จีน ขั้นต่ำ {MSAchinese}</div>
            <div id="MSGMSASpanish" class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-สเปน ขั้นต่ำ {MSASpanish}</div>
            <div id="MSGMSABali"    class="hidden text-xs text-gray-700 bg-white  rounded-md">A-Level-บาลี ขั้นต่ำ {MSABali}</div>
            <div id="MSGMSIELTS"    class="hidden text-xs text-gray-700 bg-white  rounded-md">IELTS ขั้นต่ำ {MSIELTS}</div>            
            <div id="MSGMSTOEFLIBT" class="hidden text-xs text-gray-700 bg-white  rounded-md">TOEFLIBT ขั้นต่ำ {MSTOEFLIBT}</div>
            <div id="MSGMSTOEFLPBT" class="hidden text-xs text-gray-700 bg-white  rounded-md">TOEFLPBT ขั้นต่ำ {MSTOEFLPBT}</div>
            <div id="MSGMSTOEFLCBT" class="hidden text-xs text-gray-700 bg-white  rounded-md">TOEFLCBT ขั้นต่ำ {MSTOEFLCBT}</div>
            <div id="MSGMS1PCBE" class="hidden text-xs text-gray-700 bg-white  rounded-md">ผลรวม A-Level-คณิต 1 ฟิสิกส์ เคมี ชีววิทยา ภาษาอังกฤษ ขั้นต่ำ {MS1PCBE}</div>
            <div id="MSGMSSEC" class="hidden text-xs text-gray-700 bg-white  rounded-md">ผลรวม A-Level-ฟิสิกส์ เคมี ชีวะ ขั้นต่ำ {MSSEC}</div>
        </div>

        <div class="COREEE mt-4 bg-red-100 p-4 rounded-md">
        <h3 class="font-bold text-lg text-red-600 mb-2">สารการเรียนที่รับ</h3>
                <div id="core" class="flex items-center space-x-2">
                  <img src="img/check.png" alt="Check icon" class="w-4 h-4">
                  <div class="text-xs text-gray-700 pb-0.5">ผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</div>
                </div>

                <div id="international" class="flex items-center space-x-2">
                  <img src="img/check.png" alt="Check icon" class="w-4 h-4">
                  <div class="text-xs text-gray-700 pb-0.5">ผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</div>
                </div>

                <div id="vocation" class="flex items-center space-x-2">
                  <img src="img/check.png" alt="Check icon" class="w-4 h-4">
                  <div class="text-xs text-gray-700 pb-0.5">ผู้สมัครที่จบจาก รร. หลักสูตรอาชีวศึกษา</div>
                </div>

                <div id="nfe" class="flex items-center space-x-2">
                  <img src="img/check.png" alt="Check icon" class="w-4 h-4">
                  <div class="text-xs text-gray-700 pb-0.5">ผู้สมัครที่จบจาก รร. หลักสูตรตามอัธยาศัย (กศน.)</div>
                </div>

                <div id="ged" class="flex items-center space-x-2">
                  <img src="img/check.png" alt="Check icon" class="w-4 h-4">
                  <div class="text-xs text-gray-700 pb-0.5">ผู้สมัครที่จบหลักสูตร GED</div>
                </div>

        </div>
<script>
let weights = {};
  document.addEventListener("DOMContentLoaded", function () {
    console.log('DOM fully loaded');

    const searchInput = document.getElementById('search');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            console.log('Search input changed:', this.value);
            let filter = this.value.toLowerCase();
            let list = document.querySelectorAll('#facultyList li');
            list.forEach(item => {
                item.style.display = item.textContent.toLowerCase().includes(filter) ? "" : "none";
            });
        });
    } else {
        console.error('Search input not found');
    }
    
    /////small
    const toggleText = document.querySelector(".small p");
    const content = document.getElementById("calContent");
    if (toggleText && content) {
        toggleText.addEventListener("click", function () {
            console.log('Toggle clicked, current display:', content.style.display);
            if (content.style.display === "none") {
                content.style.display = "block";
                toggleText.textContent = "ย่อหน้าต่าง 🠕";
            } else {
                content.style.display = "none";
                toggleText.textContent = "ขยายหน้าต่าง 🠗";
            }
        });
    } else {
        console.error('Toggle text or calContent not found');
    }


    const TgMS = document.querySelector(".CLS");
    const MSS = document.getElementById("min"); // สมมติว่ามี div ที่จะแสดง/ซ่อ
    const icon = document.getElementById("iconToggle");

    if (TgMS && MSS ) {
        TgMS.addEventListener("click", function () {
            const isHidden = MSS.style.display === "none";
            MSS.style.display = isHidden ? "block" : "none";
            icon.src = isHidden ? "img/ARDW.svg" : "img/ARUP.svg";
        });
    } else {
        console.error("ไม่พบ CLS หรือ min-scores");
    }
    

    ////
    const unSelect = document.querySelector('select[name="UN"]');
    if (unSelect) {
        unSelect.addEventListener('change', function () {
            console.log('University changed:', this.value);
            document.getElementById("facultyButton").textContent = "เลือกคณะ";
            document.getElementById("selectedFA").value = "";
            document.getElementById("FAsel").textContent = "";
            document.getElementById('mi1').innerText = 'N/A';
            document.getElementById('mx1').innerText = 'N/A';
            document.getElementById('mi2').innerText = 'N/A';
            document.getElementById('mx2').innerText = 'N/A';
            document.getElementById('rec').innerText = 'N/A';
            const ggElement = document.getElementById('GG');
            if (ggElement) {
                ggElement.classList.add('hidden');
                ggElement.classList.remove('block');
            }
            const scoreDivs = document.querySelectorAll('[id^="MSG"]');
            scoreDivs.forEach(div => {
                console.log(`Resetting ${div.id} to hidden`);
                div.classList.add('hidden');
                div.classList.remove('block');
            });
        });
    } else {
        console.error('University select not found');
    }

    const form = document.getElementById('UNform');
    const nameEl = document.getElementById('UNname');
    const logoEl = document.getElementById('UNLogo');
    const faselEl = document.getElementById('FAsel');

    const universityData = {
        NU: { name: 'มหาวิทยาลัยนเรศวร', logo: 'imgu/Nu.png' },
        CU: { name: 'จุฬาลงกรณ์มหาวิทยาลัย', logo: 'imgu/chula2.png' },
        KKU: { name: 'มหาวิทยาลัยขอนแก่น', logo: 'imgu/KKU.png' },
        KMUTNB: { name: 'มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ', logo: 'imgu/KMUTNB.png' }
    };

    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            console.log('Form submitted');
            const selectedUniversity = unSelect.value;
            const selectedFaculty = document.getElementById("selectedFA").value;

            if (!selectedUniversity) {
                alert('กรุณาเลือกมหาวิทยาลัยก่อน');
                console.log('No university selected');
                return;
            }

            if (!selectedFaculty) {
                alert('กรุณาเลือกคณะก่อน');
                console.log('No faculty selected');
                return;
            }

            updateCoreInfo(selectedFaculty);

            const university = universityData[selectedUniversity];
            if (university) {
                console.log('Updating university info:', university);
                nameEl.textContent = university.name;
                logoEl.src = university.logo;
                logoEl.alt = university.name;
            } else {
                console.log('University not found in universityData');
                nameEl.textContent = 'ไม่พบข้อมูลมหาวิทยาลัย';
                logoEl.src = '';
                logoEl.alt = '';
            }

            faselEl.textContent = selectedFaculty || 'ยังไม่ได้เลือกคณะ';
            showResult();

            window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
        });
    } else {
        console.error('Form not found');
    }
});

function openModal() {
    const selectedUniversity = document.querySelector('select[name="UN"]').value;
    console.log('Opening modal for university:', selectedUniversity);

    if (!selectedUniversity) {
        alert("กรุณาเลือกมหาวิทยาลัยก่อน");
        return;
    }

    fetch("get_faculties.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "university=" + encodeURIComponent(selectedUniversity)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text();
    })
    .then(data => {
        document.getElementById("facultyList").innerHTML = data;
        document.getElementById("modal").classList.remove("hidden");
        console.log('Modal opened, faculty list updated');
    })
    .catch(error => {
        console.error('Error fetching faculties:', error);
        alert('เกิดข้อผิดพลาดในการโหลดข้อมูลคณะ กรุณาลองใหม่');
    });
}

function closeModal() {
    console.log('Closing modal');
    document.getElementById("modal").classList.add("hidden");
}

function selectFA(faculty) {
    console.log('Faculty selected:', faculty);
    document.getElementById('facultyButton').innerText = faculty;
    document.getElementById('selectedFA').value = faculty;
    document.getElementById('FAsel').innerText = faculty;
    closeModal();

    updateCoreInfo(faculty);

    // รีเซ็ต div ทั้งหมดก่อน
    const scoreDivs = document.querySelectorAll('[id^="MSG"]');
    scoreDivs.forEach(div => {
        const key = div.id.replace('MSG', '');
        div.innerText = div.getAttribute('data-original-text') || div.innerText;
        div.classList.add('hidden');
        div.classList.remove('block');
        console.log(`Reset ${div.id} to original state`);
    });

    fetch('fetch_data.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'FA_cla=' + encodeURIComponent(faculty)
    })
    .then(response => {
        console.log('Fetch response status:', response.status);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log('Faculty data loaded:', data);
        if (data.error) {
            console.error('Server error:', data.error);
            alert('เกิดข้อผิดพลาดจากเซิร์ฟเวอร์: ' + data.error);
            return;
        }


        document.getElementById('mi1').innerText = data.PointMin1 || 'N/A';
        document.getElementById('mx1').innerText = data.PointMax1 || 'N/A';
        document.getElementById('mi2').innerText = data.PointMin2 || 'N/A';
        document.getElementById('mx2').innerText = data.PointMax2 || 'N/A';
        document.getElementById('rec').innerText = data.quantity || 'N/A';

        const minimumScores = data.minimum_scores || {};
        console.log('Minimum scores:', minimumScores);

        // แก้ไขคีย์ PAX เป็น GPAX
        const scoreMessages = {
            'CDM': 'จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ คณิตศาสตร์ ขั้นต่ำ {CDM}',
            'CDS': 'จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ วิทยาศาสตร์และเทคโนโลยี {CDS}',
            'CDE': 'จน.หน่วยกิตต่ำสุดกลุ่มสาระฯ ภาษาต่างประเทศ {CDE}',
            'GPAX': 'คะแนนผลการเรียนขั้นต่ำ {GPAX}',
            'MSTG1': 'TGAT1-อังกฤษ ขั้นต่ำ {MSTG1}',
            'MSTG2': 'TGAT2-คิดเหตุผล ขั้นต่ำ {MSTG2}',
            'MSTG3': 'TGAT3-สมรรถนะ ขั้นต่ำ {MSTG3}',
            'MSTG': 'TGAT ขั้นต่ำ {MSTG}',
            'MSTP1': 'TPAT1-เชาว์ ขั้นต่ำ {MSTP1}',
            'MSTP2': 'TPAT2-ความถนัดศิลปกรรมศาสตร์ {MSTP2}',
            'MSTP3': 'TPAT3-ความถนัดด้านวิทยาศาสตร์ เทคโนโลยีฯ {MSTP3}',
            'MSTP4': 'TPAT4-สถาปัตย์ ขั้นต่ำ {MSTP4}',
            'MSTP5': 'TPAT5-ครู ขั้นต่ำ {MSTP5}',
            'MSAMath1': 'A-Level-คณิต1 ขั้นต่ำ {MSAMath1}',
            'MSAMath2': 'A-Level-คณิต2 ขั้นต่ำ {MSAMath2}',
            'MSASci': 'A-Level-วิทย์ทั่วไป ขั้นต่ำ {MSASci}',
            'MSAPhy': 'A-Level-ฟิสิกส์ ขั้นต่ำ {MSAPhy}',
            'MSAChe': 'A-Level-เคมี ขั้นต่ำ {MSAChe}',
            'MSABio': 'A-Level-ชีววิทยา ขั้นต่ำ {MSABio}',
            'MSASoci': 'A-Level-สังคมศึกษา ขั้นต่ำ {MSASoci}',
            'MSAThai': 'A-Level-ภาษาไทย ขั้นต่ำ {MSAThai}',
            'MSAEnglish': 'A-Level-อังกฤษ ขั้นต่ำ {MSAEnglish}',
            'MSAFrench': 'A-Level-ฝรั่งเศส ขั้นต่ำ {MSAFrench}',
            'MSAGerman': 'A-Level-เยอรมัน ขั้นต่ำ {MSAGerman}',
            'MSAJapan': 'A-Level-ญี่ปุ่น ขั้นต่ำ {MSAJapan}',
            'MSAKorean': 'A-Level-เกาหลี ขั้นต่ำ {MSAKorean}',
            'MSAchinese': 'A-Level-จีน ขั้นต่ำ {MSAchinese}',
            'MSASpanish': 'A-Level-สเปน ขั้นต่ำ {MSASpanish}',
            'MSABali': 'A-Level-บาลี ขั้นต่ำ {MSABali}',
            'MSIELTS': 'IELTS ขั้นต่ำ {MSIELTS}',
            'MSTOEFLIBT': 'TOEFL iBT ขั้นต่ำ {MSTOEFLIBT}',
            'MSTOEFLPBT': 'TOEFL PBT ขั้นต่ำ {MSTOEFLPBT}',
            'MSTOEFLCBT': 'TOEFL CBT ขั้นต่ำ {MSTOEFLCBT}',
            'MSSEC': 'ผลรวม A-Level-ฟิสิกส์ เคมี ชีวะ ขั้นต่ำ {MSSEC}',
            'MS1PCBE': 'ผลรวม A-Level-คณิต 1 ฟิสิกส์ เคมี ชีววิทยา ภาษาอังกฤษ ขั้นต่ำ {MS1PCBE}',
        };

        for (const [key, value] of Object.entries(minimumScores)) {
            const divId = `MSG${key}`;
            const divElement = document.getElementById(divId);
            if (divElement) {
                console.log(`Processing ${divId} with key ${key}, value: ${value}`);
                if (value > 0) {
                    const originalText = scoreMessages[key] || divElement.innerText;
                    divElement.setAttribute('data-original-text', originalText);
                    divElement.innerText = originalText.replace(`{${key}}`, value.toFixed(2));
                    divElement.classList.remove('hidden');
                    divElement.classList.add('block');
                    console.log(`Updated ${divId} to: ${divElement.innerText}`);
                } else {
                    divElement.classList.add('hidden');
                    divElement.classList.remove('block');
                    console.log(`Hid ${divId}, value <= 0`);
                }
            } else {
                console.error(`Div ${divId} not found`);
            }
        }

        // เพิ่มโค้ดใหม่สำหรับจัดการค่าน้ำหนักจาก fetch_weights.php
        // รีเซ็ต div สูตรการคำนวณ
        const weightDivs = document.querySelectorAll('[id="gpx"], [id^="Tgat"], [id^="Tpat"], [id^="AL"]');
        weightDivs.forEach(div => {
            div.innerText = div.getAttribute('data-original-text') || div.innerText;
            div.classList.add('hidden');
            div.classList.remove('block');
            console.log(`Reset ${div.id} to original state`);
        });

        // ดึงค่าน้ำหนักจาก fetch_weights.php
        fetch('fetch_weights.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'FA_cla=' + encodeURIComponent(faculty)
        })
        .then(response => {
            console.log('Fetch weights response status:', response.status);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Weights data loaded:', data);
            if (data.error) {
                console.error('Server error:', data.error);
                alert('เกิดข้อผิดพลาดจากเซิร์ฟเวอร์: ' + data.error);
                return;
            }

            weights = data.weights || {};
            calculateScore();
            const weightDivs = [
                { id: 'gpx_weg', label: 'คะแนนผลการเรียน', key: 'gpx' },
                { id: 'Tgat_weg', label: 'TGAT ', key: 'Tgat' },
                { id: 'Tgat1_weg', label: 'TGAT1-อังกฤษ', key: 'Tgat1' },
                { id: 'Tgat2_weg', label: 'TGAT2-คิดเหตุผล', key: 'Tgat2' },
                { id: 'Tgat3_weg', label: 'TGAT3-สมรรถนะ', key: 'Tgat3' },
                { id: 'Tpat1_weg', label: 'TPAT1-เชาว์', key: 'Tpat1' },
                { id: 'Tpat2_weg', label: 'TPAT2-ความถนัดศิลปกรรมศาสตร์', key: 'Tpat2' },
                { id: 'Tpat3_weg', label: 'TPAT3-ความถนัดด้านวิทยาศาสตร์ เทคโนโลยีฯ', key: 'Tpat3' },
                { id: 'Tpat4_weg', label: 'TPAT4-สถาปัตย์', key: 'Tpat4' },
                { id: 'Tpat5_weg', label: 'TPAT5-ครู', key: 'Tpat5' },
                { id: 'AL1_weg', label: 'A-Level-คณิต1', key: 'AL1' },
                { id: 'AL2_weg', label: 'A-Level-คณิต2', key: 'AL2' },
                { id: 'ALsci_weg', label: 'A-Level-วิทย์ทั่วไป', key: 'ALsci' },
                { id: 'ALphy_weg', label: 'A-Level-ฟิสิกส์', key: 'ALphy' },
                { id: 'ALchm_weg', label: 'A-Level-เคมี', key: 'ALchm' },
                { id: 'ALbio_weg', label: 'A-Level-ชีววิทยา', key: 'ALbio' },
                { id: 'ALscd_weg', label: 'A-Level-สังคมศึกษา', key: 'ALscd' },
                { id: 'ALthi_weg', label: 'A-Level-ภาษาไทย', key: 'ALthi' },
                { id: 'ALeng_weg', label: 'A-Level-อังกฤษ', key: 'ALeng' },
                { id: 'ALfan_weg', label: 'A-Level-ฝรั่งเศส', key: 'ALfan' },
                { id: 'ALger_weg', label: 'A-Level-เยอรมัน', key: 'ALger' },
                { id: 'ALjap_weg', label: 'A-Level-ญี่ปุ่น', key: 'ALjap' },
                { id: 'ALkor_weg', label: 'A-Level-เกาหลี', key: 'ALkor' },
                { id: 'ALchi_weg', label: 'A-Level-จีน', key: 'ALchi' },
                { id: 'ALsph_weg', label: 'A-Level-สเปน', key: 'ALsph' },
                { id: 'ALbai_weg', label: 'A-Level-บาลี', key: 'ALbai' },
                { id: 'SEC_weg', label: 'ผลรวม A-Level-ฟิสิกส์ เคมี ชีวะ', key: 'SEC' },
                { id: 'PCBE1_weg', label: 'ผลรวม A-Level-คณิต 1 ฟิสิกส์ เคมี ชีววิทยา ภาษาอังกฤษ,', key: 'PCBE1' }
            ];

            weightDivs.forEach(div => {
                const divElement = document.getElementById(div.id);
                if (divElement) {
                    const originalText = `${div.label} {${div.key}}`;
                    divElement.setAttribute('data-original-text', originalText);
                    const weight = weights[div.key] || 0;
                    console.log(`Processing ${div.id} with key ${div.key}, weight: ${weight}`);
                    if (weight > 0) {
                        divElement.innerText = originalText.replace(`{${div.key}}`, weight.toFixed(2) + " %");
                        divElement.classList.remove('hidden');
                        divElement.classList.add('block');
                        console.log(`Updated ${div.id} to: ${divElement.innerText}`);
                    } else {
                        divElement.classList.add('hidden');
                        divElement.classList.remove('block');
                        console.log(`Hid ${div.id}, weight <= 0`);
                    }
                } else {
                    console.error(`Div ${div.id} not found`);
                }
            });


        })
        .catch(error => {
            console.error('Error fetching weights:', error);
            alert('เกิดข้อผิดพลาดในการโหลดข้อมูลน้ำหนัก กรุณาลองใหม่');
            const weightDivs = document.querySelectorAll('[id="gpx"], [id^="Tgat"], [id^="Tpat"], [id^="AL"]');
            weightDivs.forEach(div => {
                div.classList.add('hidden');
                div.classList.remove('block');
            });
        });
    });
}

function showResult() {
    const ggElement = document.getElementById('GG');
    if (ggElement) {
        ggElement.classList.remove('hidden');
        ggElement.classList.add('block');
        console.log('Result section shown');
    }
}

function updateCoreInfo(faculty) {
    fetch('fetch_core_data.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'FA_cla=' + encodeURIComponent(faculty)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            const coreInfo = data.coreInfo;

            // 🔍 log ค่าที่ได้จากฝั่ง server
            console.log('Core data received:');
            console.log('Core:', coreInfo.core);
            console.log('International:', coreInfo.international);
            console.log('Vocation:', coreInfo.vocation);
            console.log('NFE:', coreInfo.nfe);
            console.log('GED:', coreInfo.ged);

            console.log('Core Info received from server:', coreInfo);
            for (const key in coreInfo) {
                const el = document.getElementById(key);
                if (!el) {
                    console.warn(`Element with id "${key}" not found.`);
                    continue;
                }

                const img = el.querySelector('img');
                const textDiv = el.querySelector('div');

                if (img) img.src = coreInfo[key].img;
                if (textDiv) textDiv.textContent = coreInfo[key].text;
            }
        } else {
            console.error('Server error:', data.error);
        }
    })
    .catch(err => {
        console.error('Failed to fetch core info:', err);
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const keys = [
        "gpx", "Tgat1", "Tgat2", "Tgat3",
        "Tpat1", "Tpat12", "Tpat13", "Tpat21", "Tpat22", "Tpat23",
        "Tpat3", "Tpat4", "Tpat5",
        "AL1", "AL2", "ALsci", "ALphy", "ALchm", "ALbio", "ALscd", "ALthi", "ALeng",
        "ALfan", "ALger", "ALjap", "ALkor", "ALchi", "ALbai", "ALsph"
    ];

    keys.forEach(key => {
        const el = document.getElementById("in" + key);
        if (el) el.value = localStorage.getItem(key) || "";
    });

   

    document.querySelectorAll("input[id^='in']").forEach(input => {
        input.addEventListener("input", calculateScore);
    });
});

function calculateScore() {
    const getVal = id => parseFloat(document.getElementById(id)?.value || 0);
    const getWeight = id => {
        const text = document.getElementById(id)?.innerText || "0";
        return parseFloat(text.replace("%", "")) || 0;
    };

    // ข้อมูลคะแนน
    const gpx = getVal("ingpx");
    const Tgat1 = getVal("inTgat1");
    const Tgat2 = getVal("inTgat2");
    const Tgat3 = getVal("inTgat3");
    const Tgat = (Tgat1 + Tgat2 + Tgat3) / 300;

    const Tpat1 = getVal("inTpat1");
    const Tpat12 = getVal("inTpat12");
    const Tpat13 = getVal("inTpat13");
    const Tpat21 = getVal("inTpat21");
    const Tpat22 = getVal("inTpat22");
    const Tpat23 = getVal("inTpat23");
    const Tpat3 = getVal("inTpat3");
    const Tpat4 = getVal("inTpat4");
    const Tpat5 = getVal("inTpat5");


    const AL1 = getVal("inAL1");
    const AL2 = getVal("inAL2");
    const ALsci = getVal("inALsci");
    const ALphy = getVal("inALphy");
    const ALchm = getVal("inALchm");
    const ALbio = getVal("inALbio");
    const ALscd = getVal("inALscd");
    const ALthi = getVal("inALthi");
    const ALeng = getVal("inALeng");
    const ALfan = getVal("inALfan");
    const ALger = getVal("inALger");
    const ALjap = getVal("inALjap");
    const ALkor = getVal("inALkor");
    const ALchi = getVal("inALchi");
    const ALbai = getVal("inALbai");
    const ALsph = getVal("inALsph");

    const getW = key => weights[key] || 0;
    let total = 0;

    const items = [
        { key: "gpx", score: gpx / 4, weight: getW("gpx") },
        { key: "Tgat", score: Tgat, weight: getW("Tgat") },
        { key: "Tgat1", score: Tgat1 / 100, weight: getW("Tgat1") },
        { key: "Tgat2", score: Tgat2 / 100, weight: getW("Tgat2") },
        { key: "Tgat3", score: Tgat3 / 100, weight: getW("Tgat3") },
        { key: "Tpat3", score: (Tpat3 + Tpat12 + Tpat13) / 300, weight: getW("Tpat3") },
        { key: "Tpat1", score: Tpat1 / 100, weight: getW("Tpat1") },
        { key: "Tpat1", score: (Tpat1 + Tpat12 + Tpat13) / 300, weight: getW("Tpat1") },
        { key: "Tpat2", score: (Tpat21 + Tpat22 + Tpat23) / 30, weight: getW("Tpat2") },
        { key: "Tpat4", score: Tpat4 / 100, weight: getW("Tpat4") },
        { key: "Tpat5", score: Tpat5 / 100, weight: getW("Tpat5") },
        { key: "AL1", score: AL1 / 100, weight: getW("AL1") },
        { key: "AL2", score: AL2 / 100, weight: getW("AL2") },
        { key: "ALsci", score: ALsci / 100, weight: getW("ALsci") },
        { key: "ALphy", score: ALphy / 100, weight: getW("ALphy") },
        { key: "ALchm", score: ALchm / 100, weight: getW("ALchm") },
        { key: "ALbio", score: ALbio / 100, weight: getW("ALbio") },
        { key: "ALscd", score: ALscd / 100, weight: getW("ALscd") },
        { key: "ALthi", score: ALthi / 100, weight: getW("ALthi") },
        { key: "ALeng", score: ALeng / 100, weight: getW("ALeng") },
        { key: "ALfan", score: ALfan / 100, weight: getW("ALfan") },
        { key: "ALger", score: ALger / 100, weight: getW("ALger") },
        { key: "ALjap", score: ALjap / 100, weight: getW("ALjap") },
        { key: "ALkor", score: ALkor / 100, weight: getW("ALkor") },
        { key: "ALchi", score: ALchi / 100, weight: getW("ALchi") },
        { key: "ALbai", score: ALbai / 100, weight: getW("ALbai") },
        { key: "ALsph", score: ALsph / 100, weight: getW("ALsph") },
        { key: "SEC", score: (ALphy + ALchm + ALbio) / 300, weight: getW("SEC") },
        { key: "PCBE1", score: (AL1 + ALphy + ALchm + ALbio + ALeng) / 500, weight: getW("PCBE1") }
    ];

    console.log("=========== รายการคำนวณคะแนน ==========");
    items.forEach(({ key, score, weight }) => {
        const part = score * weight;
        console.log(`${key}: (${score.toFixed(4)} × ${weight.toFixed(2)}) = ${part.toFixed(2)}`);
        total += part;
    });

    const resultBox = document.getElementById("SCX");
    if (resultBox) {
        resultBox.innerText = total.toFixed(2);
        console.log("💯 คะแนนรวมทั้งหมด:", total.toFixed(2));
    }
}


</script>

    <style>
        .custom-td {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-rows: repeat(2);
            height: 100%;
        }
        .top-content {
            font-weight: bold;
            font-size: 1rem; /* ปรับขนาดตัวเลขให้ใหญ่ */
            color: #f97316; /* สีส้มเหมือนในภาพ */
        }
    </style>
</body>
</html>

<?php
$conn->close();
?>