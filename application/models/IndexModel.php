<?php
class IndexModel extends CI_Model
{
    public function getCategoryHome()
    {
        $query = $this->db->get_where("categories", ['status' => 1]);
        return $query->result();
    }
    public function getMainCategory()
    {
        $query = $this->db->get_where("main_categories");
        return $query->result();
    }
    public function getTitleCategory()
    {
        $query = $this->db->get_where("title_categories");
        return $query->result();
    }
    public function getCategoryNam()
    {
        $query = $this->db->get_where("categories");
        return $query->result();
    }
    public function getAllProducts()
    {
        $query = $this->db->get_where("products", ['status' => 1]);
        return $query->result();
    }
    public function getAllProductsHome()
    {
        $this->db->limit(10);
        $query = $this->db->get_where("products", ['status' => 1]);
        return $query->result();
    }
    // public function getProductsSale()
    // {
    //     $this->db->limit(5);
    //     $this->db->get_where("products", ['status' => 1]);
    //     $query = $this->db->get_where("products", ['sale_status' => 1]);
    //     return $query->result();
    // }
    public function getAllColors()
    {
        $query = $this->db->get_where("color_library");
        return $query->result();
    }
    public function getColorsCate()
    {
        $query = $this->db->get_where("color_library", ['statusCate' => 1]);
        return $query->result();
    }
    public function getAllImages()
    {
        $query = $this->db->get_where("image_library", ['status' => 1]);
        return $query->result();
    }
    public function getAllSizes()
    {
        $query = $this->db->get_where("size_library");
        return $query->result();
    }
    public function getAllSizesCate()
    {
        $query = $this->db->get_where("size_library", ['size_cate_status' => 1]);
        return $query->result();
    }
    public function getDetailProduct($id)
    {
        $query = $this->db->select('categories.name as category, products.*')
            ->from('categories')
            ->join('products', 'products.category_id=categories.id')
            ->where('products.id', $id)
            ->get();
        return $query->result();
    }

    public function getNameCategory($id)
    {
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        // $this->db->where('categories.status = 1');
        $this->db->where('categories.slug', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $name = $result->name;
    }

    public function getCharacteristicsCategory($id)
    {
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        // $this->db->where('categories.status = 1');
        $this->db->where('categories.slug', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $name = $result->characteristics;
    }
    public function getTitleNameCategory($id)
    {
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        // $this->db->where('categories.status = 1');
        $this->db->where('categories.slug', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $title = $result->cate;
    }
    public function getMainNameCategory($id)
    {
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        $this->db->where('categories.slug', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $nameMainCate = $result->main_categories_name;
    }

    public function getCategoryProduct($id)
    {
        $query = $this->db->select('categories.*, products.* ')
            ->from('categories')
            ->join('products', 'products.cate=categories.slug')
            ->where('products.status = 1')
            ->where('products.cate', $id)
            ->get();
        return $query->result();
    }

    public function getSize($id)
    {
        $query = $this->db->select('size_library.size, products.*')
            ->from('size_library')
            ->join('products', 'products.id=size_library.product_id')
            ->where('products.size', $id)
            ->get();
        return $query->result();
    }
    public function getProductName($id)
    {
        $this->db->select('products.*');
        $this->db->from('products');
        $this->db->limit(1);
        $this->db->where('products.id', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $name = $result->name;
    }
    public function getCategorySlug($id)
    {
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        $this->db->where('categories.slug', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $slug = $result->slug;
    }
    public function getAllProductsByKeyword($keyword)
    {
        $query = $this->db->select('categories.*, products.* ')
            ->from('categories')
            ->join('products', 'products.cate=categories.slug')
            ->where('products.status = 1')
            ->like('products.name', $keyword)
            ->get();
        return $query->result();
    }

    public function countAllProduct()
    {
        return $this->db->count_all('products');
    }
    public function countAllProductByCate($id)
    {
        $this->db->where('cate', $id);
        $this->db->from('products');
        return $this->db->count_all_results();

    }
    public function countAllProductSale()
    {
        $this->db->where('sale_status = 1');
        $this->db->from('products');
        return $this->db->count_all_results();

    }

    public function getIndexPagination($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('products', ['status' => 1]);
        return $query->result();
    }
    public function getCatePagination($id, $limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->select('categories.*, products.* ')
            ->from('categories')
            ->join('products', 'products.cate=categories.slug')
            ->where('products.status = 1')
            ->where('products.cate', $id)
            ->get();
        return $query->result();
    }
    public function getSalePagination($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("products", ['sale_status' => 1]);
        return $query->result();
    }

    public function make_query($id, $minimum_price, $maximum_price, $color, $size)
    {
        $query = "
    SELECT categories.*, products.* FROM categories JOIN products ON products.cate=categories.slug
    WHERE products.status = '1' AND products.cate = '$id'";

        if (isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price)) {
            $query .= "
  AND price BETWEEN '" . $minimum_price . "' AND '" . $maximum_price . "'
 ";
        }
//         if (isset($minprice, $maxprice) && empty($maxprice)) {
//             $query .= "
//   AND price > '$minprice'
//  ";
//         }
        if (isset($color)) {
            $color_filter = implode("','", $color);
            $query .= "
        AND color IN('" . $color_filter . "')
       ";

        }
        if (isset($size)) {
            $size_filter = implode("','", $size);
            $query .= "
        AND size IN('" . $size_filter . "')
       ";
        }

        return $query;
    }
    public function count_all($id, $minimum_price, $maximum_price, $color, $size)
    {
        $query = $this->make_query($id, $minimum_price, $maximum_price, $color, $size);
        $data = $this->db->query($query);
        return $data->num_rows();
    }
    public function getAllColorProduct($id)
    {
        $query = $this->db->select('color_library.*, products.* ')
            ->from('color_library')
            ->join('products', 'products.id=color_library.product_id')
            ->where('products.status = 1')
            ->where('color_library.product_id', $id)
            ->get();
        foreach ($query->result() as $row) {
            return $row->color;
        }
    }

    public function fetch_data($id, $limit, $start, $minimum_price, $maximum_price, $color, $size)
    {

        $query = $this->make_query($id, $minimum_price, $maximum_price, $color, $size);
        // $query = $this->db->limit($start, $limit);
        $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);
        $colors = $this->getAllColors();
        $output = '';
        $oldprice = '';

        foreach ($data->result_array() as $row) {
            if ($row['sale_status'] == 1) {
                $oldprice = number_format($row['old_price'], 0, ',', '.');
            }

        }
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $colorproduct = '';

                foreach ($colors as $key => $color) {
                    if ($color->product_id == $row['id']) {
                        $colorproduct .= '
                        <div class="products_items-card-option-img">
                        <img src="' . base_url() . 'frontend/img/' . $color->color . '">
    </div>
                        ';
                    }
                }
                $output .= '
    <div class="col l-3 m-4 c-6">
                                <a href="' . base_url() . 'product/' . $row['id'] . '" class="products_items">
<div class="products_items-card">
    <div class="products_items-card-img">
        <img src="' . base_url() . 'frontend/img/' . $row['images'] . '">
<button class="btn-buy"></button>
</div>
<h1 class="products_items-card-name">' . $row['name'] . '</h1>
<div class="products_items-card-price">

    <span
                                                class="new-price">' . number_format($row['price'], 0, ',', '.') . 'đ
    </span>
    <span
                                                class="old-price">' . $oldprice . '
    </span>

</div>
<div class="products_items-card-option">
' . $colorproduct . '
</div>
</div>
</div>
</a>
</div>
';

            }
        } else {
            $output = '<h3 class="no-data">Không có sản phẩm phù hợp</h3>';
        }

        return $output;
    }

}