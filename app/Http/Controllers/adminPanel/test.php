public function store(Request $request)
{

$this->validate($request, [
'title' => ['required', 'min:3', 'max:255'],
'category' => ['required'],
'price' => ['required'],
'product_id' => ['required'],
'image' => ['required'],
'status' => ['required'],
],
[
'title.required' => 'عنوان محصول الزامی است',
'title.min' => 'عنوان محصول نمیتواند کمتر از سه کارکتر باشد',
'title.max' => 'عنوان محصول نمیتواند بیشتر از 255 کارکتر باشد',
'category.required' => 'دسته بندی محصول الزامی است',
'price.required' => 'قیمت محصول الزامی است',
'product_id.required' => 'کد محصول الزامی است',
'image.required' => 'تصویر محصول الزامی است',
'status.required' => 'وضعیت محصول الزامی است',

]);

if ($request->hasFile('image')) {
$image = '';
$destination = public_path() . config('cms-setting.url');
if (!is_dir($destination)) {
mkdir($destination, '0777', true);
}
$destination = $destination . '/';
$file = $request->file('image');
$filename = time() . $file->getClientOriginalName();
$file->move($destination, $filename);
$image = config('cms-setting.url') . '/' . $filename;
$thumbnail = $image;


Product::create([
'title' => $request->get('title'),
'slug' => $request->get('title'),
'description' => $request->get('description'),
'price' => $request->get('price'),
'old_price' => $request->get('old_price'),
'category' => $request->get('category'),
'count' => $request->get('count'),
'size' => $request->get('size'),
'weight' => $request->get('weight'),
'discount' => $request->get('discount'),
'product_id' => $request->get('product_id'),
'status' => $request->get('status'),
'image' => $image,
'thumbnail' => $thumbnail,
'rate' => 1,
]);
return redirect(route('dashboard.product.index'))->with('message', 'محصول شما با موفقیت ثبت شد');
} else
return redirect(route('dashboard.product.index'))->with('error', 'مشکلی در ثبت محصول وجود دارد');

}








public function update(Request $request, $id)
{

$this->validate($request, [
'title' => ['required', 'min:3', 'max:255'],
'category' => ['required'],
'price' => ['required'],
//            'product_id'=>['required'],
//            'image'=>['required'],
'status' => ['required'],
],
[
'title.required' => 'عنوان محصول الزامی است',
'title.min' => 'عنوان محصول نمیتواند کمتر از سه کارکتر باشد',
'title.max' => 'عنوان محصول نمیتواند بیشتر از 255 کارکتر باشد',
'category.required' => 'دسته بندی محصول الزامی است',
'price.required' => 'قیمت محصول الزامی است',
//                'product_id.required' => 'کد محصول الزامی است',
//                'image.required' => 'تصویر محصول الزامی است',
'status.required' => 'وضعیت محصول الزامی است',

]);
$product = Product::findorfail($id);

if ($request->hasFile('image')) {
$image = '';
$destination = public_path() . config('cms-setting.url');
if (!is_dir($destination)) {
mkdir($destination, '0777', true);
}
$destination = $destination . '/';
$file = $request->file('image');
$filename = time() . $file->getClientOriginalName();
$file->move($destination, $filename);
$image = config('cms-setting.url') . '/' . $filename;
$thumbnail = $image;

} else {
$image = $product->image;
$thumbnail = $image;
}
$product->update([
'title' => $request->get('title'),
'slug' => $request->get('title'),
'description' => $request->get('description'),
'price' => $request->get('price'),
'old_price' => $request->get('old_price'),
'category' => $request->get('category'),
'count' => $request->get('count'),
'size' => $request->get('size'),
'weight' => $request->get('weight'),
'discount' => $request->get('discount'),
'product_id' => $product->product_id,
'status' => $request->get('status'),
'image' => $image,
'thumbnail' => $thumbnail,
//                'rate'=>1,
]);
$product->save();
return redirect(route('dashboard.product.index'))->with('message', 'محصول ' . $product->title . ' با موفقیت ویرایش شد');
