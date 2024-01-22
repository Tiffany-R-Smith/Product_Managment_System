<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding-top: 0;">
    <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg" style="width: calc(100% + 200px); overflow-x: auto; margin-left: -200px; padding-right: 200px;">
            <div class="p-6 text-gray-900">
                    <h3>{{ __("SCHEDULE A") }}</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>License Type</th>
                                    <th>License</th>
                                    <th>Style</th>
                                    <th>Design Name</th>
                                    <th>Style Description</th>
                                    <th>Team</th>
                                    <th>SKU</th>
                                    <th>NW UPC</th>
                                    <th>UPC</th>
                                    <th>Setup Name</th>
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->id }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->created_at }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->license_type }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->license}}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->style }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->design_name }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->style_description }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->team }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->sku }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->short_upc}}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->upc }}</td>
                                    <td style="padding: 8px; border: 1px solid #ccc; white-space: nowrap;">{{ $product->setup_name }}</td>
                                    <!-- Add more table columns as needed -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>