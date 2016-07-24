<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryesController extends Controller
{
    static function build_tree($cats, $parent_id, $only_parent = false)
    {
        if (is_array($cats) and isset($cats[$parent_id])) {
            $tree = '';
            if ($only_parent == false) {

                foreach ($cats[$parent_id] as $cat) {
                    if (isset($cats[$cat['id']])) {
                        $url = '/';

                    } else {

                        $url = '/catalog/' . $cat['url'];

                    }

                    if (isset($cats[$cat['id']])) {

                        $tree .= '<li class="dropdown" >';
                        $tree .= '<a href="' . $url . '" class="dropdown-toggle " data-toggle="dropdown"> ' . $cat['name'] . '<i class="caret"></i></a>';
                        $tree .= '<div class="dropdown-menu">';
                        $tree .= '<div class="dropdown-inner">';
                        $tree .= '<ul class="list-unstyled">';
                        $tree .= CategoryesController::build_tree($cats, $cat['id']);
                        $tree .= '</div>';
                        $tree .= '</div>';
//                        $tree .='</ul>';
                        $tree .= '</li>';


                    } else {


                    $tree .= '<li><a href="' . $url . '"> ' . $cat['name'] . '</a>';

                    $tree .= CategoryesController::build_tree($cats, $cat['id']);

                    $tree .= '</li>';
                }
                }

            } elseif (is_numeric($only_parent)) {

//                $cat = $cats[$parent_id][$only_parent];
//
//                $tree .= '<li>' . $cat['name'] ;
//                $tree .='<ul>';
//                $tree .= CategoryController::build_tree($cats,$cat['id']);
//                $tree .='</ul>';
//                $tree .= '</li>';

            }
//            $tree .='</ul>';
        } else return null;
        return $tree;
    }
}
