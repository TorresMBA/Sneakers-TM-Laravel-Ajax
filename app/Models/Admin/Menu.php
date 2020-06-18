<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = [//cuales son los campos o atributos de la base de datos, o los campos pertenecientes a este modelo para poder crear masivamente
        'nombre',
        'url',
        'icono'
    ];
    protected $guarded = 'id';//Campos que laravel no va a dejar modificaar en este caso id
    //public $timestamps = false;//Permite usar 

    public function roles(){
        return $this->belongsTo(Rol::class, 'menu_rol');//Para la relacion de mucho a muchos, Muchos menus tienes muchos roles
    }

    public function getHijos($padres, $line){
        $hijos = [];
        foreach($padres as $line1){
            if($line['id'] == $line1['menu_id']){
                $hijos = array_merge($hijos, [array_merge($line1, ['submenu' => $this->getHijos($padres, $line1)])]);
            }
        }
        return $hijos;
    }

    public function getPadres($front){
        if ($front) {
            return $this->whereHas('roles', function($query){
                $query->where('rol_id', session()->get('rol_id'))->orderby('menu_id');
            })->where('estado', 1)
                ->orderby('menu_id')
                ->orderby('orden')
                ->get()
                ->toArray();
        }else{
            return $this->orderby('menu_id')
                ->orderby('menu_id')
                ->get()
                ->toArray();
        }
    }

    public static function getMenu($front = false){
        $menus = new Menu();
        $padres = $menus->getPadres($front);
        $menuAll= [];
        foreach ($padres as $line) {
            if ($line['menu_id'] != 0)
                break;
            $item = [array_merge($line, ['submenu' => $menus->getHijos($padres, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }

    public function guardarOrden($menu){        
        $menus = json_decode($menu);
        foreach($menus as $key => $value){
            $this->where('id', $value->id)->update(['menu_id' => 0, 'orden' => $var + 1]);
            if(!empty($value->children)){
                foreach ($value->children as $key => $vchild) {
                    $update_id = $vchild->id;
                    $parent_id = $value->id;
                    $this->where('id', $value->id)->update(['menu_id' => $parent_id, 'orden' => $var + 1]);

                    if(!empty($vchild->children)){
                        foreach($vchild->children as $key => $vchild2){
                            $update_id = $vchild2->id;
                            $parent_id = $vchild->id;
                            $this->where('id', $value->id)->update(['menu_id' => $parent_id, 'orden' => $var + 1]);

                            if(!empty($vchild2->children)){
                                foreach($vchild2 as $key => $vchild3){
                                    $update_id = $vchild3->id;
                                    $parent_id = $vchild2->id;
                                    $this->where('id', $value->id)->update(['menu_id' => $parent_id, 'orden' => $var + 1]);

                                    if(!empty($vchild3->children)){
                                        foreach($vchild3 as $key => $vchild4){
                                            $update_id = $vchild4->id;
                                            $parent_id = $vchild3->id;
                                            $this->where('id', $value->id)->update(['menu_id' => $parent_id, 'orden' => $var + 1]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
