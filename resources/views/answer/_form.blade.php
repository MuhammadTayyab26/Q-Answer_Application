@csrf



<div class="form-group row">
    <label for="body" class="col-md-4 col-form-label text-md-right">Answer</label>

    <div class="col-md-6">
        <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="description"></textarea>

        @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ $buttonName }}
        </button>

    </div>
</div>
