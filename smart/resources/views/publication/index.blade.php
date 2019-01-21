@extends('layouts.app')

@section('content')
<div class="container">

  <div class="card">
      <div class="card-header">Publications</div>

      <div class="card-body">
        <form action="{{ url('/') }}/publication">
          <input name="authors" id="authors" placeholder="ค้นหาด้วยชื่อ">
          <select name="year" id="year" placeholder="ปีที่ตีพิมพ์"  >
            <option value="">ทุกปี</option>
            @foreach([2019,2018,2017,2016,2015] as $y)
            <option value="{{ $y }}">{{ ($y) }}</option>
            @endforeach
          </select>

          <button type="submit">Search2</button>
        </form>

        <ul>
          @foreach($publications as $row)
            <li>
              {{ $row->authors }}.
              "{{ $row->title }}".
              {{ $row->publisher }},
              {{ $row->year }},
              หน้า {{ $row->pages }}.
            </li>
          @endforeach

          <script>
          //•	ฐาปกรณ์ ต้นสมบูรณ์ และ วิศรุต ขวัญคุ้ม. “ระบบจอง-ยืมรูปเล่มโปรเจคสาขาวิทยาการคอมพิวเตอร”.
            //การประชุมวิชาการระดับชาติด้านวิทยาศาสตร์และเทคโนโลยี ครั้งที่ 2 (NCOST2), 2561, หน้า 54-61.
          //•	วิศรุต ขวัญคุ้ม, จิรารัตน์ เอี่ยมสอาด และธนภัทร เอี่ยมตาล. “การประยุกต์ใช้ขั้นตอนวิธีหิ่งห้อยสำหรับค้นหาแผนการทดลองแบบลาตินไฮเปอร์คิวในการจำลองการทดลองด้วยคอมพิวเตอร์”. การประชุมวิชาการระดับชาติและนานาชาติ ครั้งที่ 2 (NIRC2018), 2561, หน้า 265-274.
          //•	ธนัชพร หันทะยุง และ วิศรุต ขวัญคุ้ม. “การพัฒนาแอพพลิเคชั่นสำหรับการจัดการร้านไก่ย่างห้าดาวบนระบบปฏิบัติการแอนดรอยด์ กรณีศึกษา ร้านไก่ย่างห้าดาว สาขาเคหะออเงิน”. การประชุมวิชาการระดับชาติ วิทยาศาสตร์และเทคโนโลยีระหว่างสถาบัน ครั้งที่ 6 (ASTC2018), 2561, หน้า IT270-IT276.
          //•	วิศรุต ขวัญคุ้ม, จิรารัตน์ เอี่ยมสอาด, ธนภัทร เอี่ยมตาล. “การประยุกต์ใช้วิธีสับค่าและวิธีปรับแก้ในขั้นตอนวิธีสืบค้นสำหรับการจำลองการทดลองด้วยคอมพิวเตอร์”. วารสารวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยมหาสารคาม ปีที่ 37ฉบับที่ 4 (กรกฎาคม - สิงหาคม 2561).
          //•	จิรารัตน์ เอี่ยมสอาด, ธนภัทร เอี่ยมตาล และวิศรุต ขวัญคุ้ม. “อัลกอริทึมตรวจจับโพรงของพื้นกระเบื้องโดยใช้สัญญาณเสียง”. การประชุมวิชาการระดับชาติ ครั้งที่ 3 มหาวิทยาลัยราชภัฏกาญจนบุรี, 2561, หน้า 134-139.

          </script>
        </ul>




      </div>
  </div>
</div>
<script type="text/javascript">
  //555
  //{{ $authors }}
  //{{ $year }}
  document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
    document.querySelector("#authors").value = "{{ $authors }}" ;
    document.querySelector("#year").value = "{{ $year }}" ;
    //console.log("Hello",document.querySelector("#year").value);
  });

</script>
@endsection
