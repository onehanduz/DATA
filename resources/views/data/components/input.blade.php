@csrf
    <div class="row">
        <div class="col-lg">
            <div class="mb-1">
              <label for="exampleInputen" class="form-label">English</label>
              <input name="en" type="text" class="form-control" id="exampleInputen"
                @if ($item) value="{{ $item->en }}" @endif>
            </div>
        </div>
        <div class="col-lg">
            <div class="mb-1">
              <label for="exampleInputuz" class="form-label">Uzbek</label>
              <input name="uz" type="text" class="form-control" id="exampleInputuz"
                @if ($item) value="{{ $item->uz }}" @endif>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="mb-3">
              <label for="exampleInputtext" class="form-label">Text</label>
              <input name="text" type="text" class="form-control" id="exampleInputtext"
                @if ($item) value="{{ $item->text }}" @endif>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>