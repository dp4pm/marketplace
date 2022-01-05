@extends('admin.layouts.app')

@section('content')

<div class="plx-titlebar text-left mt-2">
	<div class=" align-items-center">
       <h1 class="h3">{{translate('Product Wish Report')}}</h1>
	</div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('wish_report.index') }}" method="GET">
                    <div class="form-group">
                        <label class="col-form-label fs-18">{{ translate('Sort by Category') }}:</label>
{{--                        <div class="col-md-5">--}}
                            <select id="demo-ease" class="from-control plx-selectpicker ml-3" name="category_id" required>
                                @foreach (\App\Models\Category::all() as $key => $category)
                                    <option value="{{ $category->id }}" @if($category->id == $sort_by) selected @endif>{{ $category->getTranslation('name') }}</option>
                                @endforeach
                            </select>
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
                            <button class="btn btn-primary ml-3" type="submit">{{ translate('Filter') }}</button>
{{--                        </div>--}}
                    </div>
                </form>

                <table class="table table-bordered plx-table mb-0">
                    <thead>
                        <tr>
                            <th>{{ translate('Product Name') }}</th>
                            <th>{{ translate('Number of Wish') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            @if($product->wishlists != null)
                                <tr>
                                    <td>{{ $product->getTranslation('name') }}</td>
                                    <td>{{ $product->wishlists->count() }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="plx-pagination mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
