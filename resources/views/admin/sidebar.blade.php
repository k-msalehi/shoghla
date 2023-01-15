<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="d-block" role="tablist">
                <div role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </div>
                <div role="presentation">
                    <a href="{{ route('category.index') }}">
                        Categories
                    </a>
                </div>
                <div role="presentation">
                <a href="{{ route('seller.index') }}">
                        Sellers
                    </a>
                </div>
            </ul>
        </div>
    </div>
</div>
