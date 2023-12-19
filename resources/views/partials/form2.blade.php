
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Comic Title" value="{{ $comic->title }}">
</div>

<div class="mb-3">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Image URL" value="{{ $comic->thumb}}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3" value="{{ $comic->description }}"></textarea>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">$</span>
    <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" value="{{ $comic->price }}">
    <span class="input-group-text">.00</span>
</div>

<div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{ $comic->series }}">
</div>

<div class="mb-3">
    <label for="date" class="form-label">Sale Date</label>
    <input type="date" class="form-control" name="sale_date" id="date" value="{{ $comic->date }}">
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" name="type" id="type" placeholder="Comic type" value="{{ $comic->type }}">
</div>

<button class="btn btn-primary" type="submit">Save</button>