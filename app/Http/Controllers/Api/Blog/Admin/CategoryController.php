<?php

namespace App\Http\Controllers\Api\Blog\Admin;

use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index()
    {
        $paginator = BlogCategory::paginate(5);
        return $paginator;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $item = BlogCategory::create($data);

        if ($item) {
            return ['success' => 'Успішно створено', 'data' => $item];
        } else {
            return ['msg' => 'Помилка створення'];
        }
    }

    public function update(Request $request, $id)
    {
        $item = BlogCategory::find($id);
        if (empty($item)) {
            return response()->json(['msg' => "Запис id=[{$id}] не знайдено"], 404);
        }

        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $result = $item->update($data);

        if ($result) {
            return ['success' => 'Успішно збережено'];
        } else {
            return ['msg' => 'Помилка збереження'];
        }
    }
}
