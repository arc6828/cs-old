<div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">authors</label>
    <div class="col-sm-10">
      <input class="form-control" name="authors" id="authors" placeholder="ชื่อผู้เขียน" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">title</label>
    <div class="col-sm-10">
      <input class="form-control" name="title" id="title" placeholder="ชื่อเรื่อง" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">publisher</label>
    <div class="col-sm-10">
      <input class="form-control" name="publisher" id="publisher" placeholder="สถานที่ตีพิมพ์">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">month</label>
    <div class="col-sm-4">
      <select name="month" id="month" class="form-control" required>
        @php
          $list_m = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
        @endphp
        @foreach($list_m as $m)
        <option value="{{ $loop->iteration }}">{{ $m }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">year</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="year" id="year" placeholder="xxxx"  required>
    </div>
    <div class="col-sm-4 text-primary">
      ยกตัวอย่าง เช่น กรอกเป็น 2019 หรือ 2562 ก็ได้
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">pages</label>
    <div class="col-sm-10">
      <input class="form-control" name="pages" id="pages" placeholder="หน้า">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-4">
      <select name="type" id="type" class="form-control">
        <option value="Conference">Conference</option>
        <option value="Journal">Journal</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">language</label>
    <div class="col-sm-4">
      <select name="language" id="language"  class="form-control">
        <option value="National">National</option>
        <option value="International">International</option>
      </select>
    </div>
  </div>
</div>
