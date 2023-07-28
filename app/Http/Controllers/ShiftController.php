<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    //
    public function index()
    {
        $shift = Shift::first();
        return view('shift.index', ['shift' => $shift]);
    }
    public function create()
    {
        $users = User::get();
        $tags = [];
        foreach ($users as $user) {
            if ($user->name == "管理員") {
                $tags[0] = "";
                continue;
            }
            $tags[mb_substr($user->name, 2, 1)] = mb_substr($user->name, 2, 1);
        }
        return view('shift.create', [
            'tags' => $tags,
            "select_a11" => null,
            "select_a21" => null,
            "select_a31" => null,
            "select_a41" => null,
            "select_a51" => null,
            "select_b12" => null,
            "select_b22" => null,
            "select_b32" => null,
            "select_b42" => null,
            "select_b52" => null,
            "select_c13" => null,
            "select_c13_2" => null,
            "select_c13_3" => null,
            "select_c23" => null,
            "select_c23_2" => null,
            "select_c23_3" => null,
            "select_c33" => null,
            "select_c33_2" => null,
            "select_c33_3" => null,
            "select_c43" => null,
            "select_c43_2" => null,
            "select_c43_3" => null,
            "select_c53" => null,
            "select_c53_2" => null,
            "select_c53_3" => null,
            "select_d14" => null,
            "select_d24" => null,
            "select_d34" => null,
            "select_d44" => null,
            "select_d54" => null,
            "select_e15" => null,
            "select_e25" => null,
            "select_e35" => null,
            "select_e45" => null,
            "select_e55" => null,
            "select_f16" => null,
            "select_f26" => null,
            "select_f36" => null,
            "select_f46" => null,
            "select_f46_2" => null,
            "select_f46_3" => null,
            "select_f56" => null,
            "select_g17" => null,
            "select_g27" => null,
            "select_g37" => null,
            "select_g47" => null,
            "select_g47_2" => null,
            "select_g47_3" => null,
            "select_g57" => null,
            "select_h18" => null,
            "select_h18_2" => null,
            "select_h18_3" => null,
            "select_h28" => null,
            "select_h28_2" => null,
            "select_h28_3" => null,
            "select_h38" => null,
            "select_h38_2" => null,
            "select_h38_3" => null,
            "select_h58" => null,
            "select_h58_2" => null,
            "select_h58_3" => null,
        ]);
    }
    public function store(Request $request)
    {
        $shift = Shift::updateOrcreate(['a11' => $request->input('11')], [
            "a11" => $request->input('11'),
            "a21" => $request->input('21'),
            "a31" => $request->input('31'),
            "a41" => $request->input('41'),
            "a51" => $request->input('51'),
            "b12" => $request->input('12'),
            "b22" => $request->input('22'),
            "b32" => $request->input('32'),
            "b42" => $request->input('42'),
            "b52" => $request->input('52'),
            "c13" => $request->input('13'),
            "c13_2" => $request->input('13_2'),
            "c13_3" => $request->input('13_3'),
            "c23" => $request->input('23'),
            "c23_2" => $request->input('23_2'),
            "c23_3" => $request->input('23_3'),
            "c33" => $request->input('33'),
            "c33_2" => $request->input('33_2'),
            "c33_3" => $request->input('33_3'),
            "c43" => $request->input('43'),
            "c43_2" => $request->input('43_2'),
            "c43_3" => $request->input('43_3'),
            "c53" => $request->input('53'),
            "c53_2" => $request->input('53_2'),
            "c53_3" => $request->input('53_3'),
            "d14" => $request->input('14'),
            "d24" => $request->input('24'),
            "d34" => $request->input('34'),
            "d44" => $request->input('44'),
            "d54" => $request->input('54'),
            "e15" => $request->input('15'),
            "e25" => $request->input('25'),
            "e35" => $request->input('35'),
            "e45" => $request->input('45'),
            "e55" => $request->input('55'),
            "f16" => $request->input('16'),
            "f26" => $request->input('26'),
            "f36" => $request->input('36'),
            "f46" => $request->input('46'),
            "f46_2" => $request->input('46_2'),
            "f46_3" => $request->input('46_3'),
            "f56" => $request->input('56'),
            "g17" => $request->input('17'),
            "g27" => $request->input('27'),
            "g37" => $request->input('37'),
            "g47" => $request->input('47'),
            "g47_2" => $request->input('47_2'),
            "g47_3" => $request->input('47_3'),
            "g57" => $request->input('57'),
            "h18" => $request->input('18'),
            "h18_2" => $request->input('18_2'),
            "h18_3" => $request->input('18_3'),
            "h28" => $request->input('28'),
            "h28_2" => $request->input('28_2'),
            "h28_3" => $request->input('28_3'),
            "h38" => $request->input('38'),
            "h38_2" => $request->input('38_2'),
            "h38_3" => $request->input('38_3'),
            "h58" => $request->input('58'),
            "h58_2" => $request->input('58_2'),
            "h58_3" => $request->input('58_3'),
        ]);
        return redirect("/shift");
    }
    public function edit($id)
    {
        $shift = Shift::findOrFail($id);
        $users = User::get();
        $tags = [];
        foreach ($users as $user) {
            if ($user->name == "管理員") {
                $tags[0] = "";
                continue;
            }
            $tags[mb_substr($user->name, 2, 1)] = mb_substr($user->name, 2, 1);
        }
        $select_a11 = $shift->a11;
        $select_a21 = $shift->a21;
        $select_a31 = $shift->a31;
        $select_a41 = $shift->a41;
        $select_a51 = $shift->a51;
        $select_b12 = $shift->b12;
        $select_b22 = $shift->b22;
        $select_b32 = $shift->b32;
        $select_b42 = $shift->b42;
        $select_b52 = $shift->b52;
        $select_c13 = $shift->c13;
        $select_c13_2 = $shift->c13_2;
        $select_c13_3 = $shift->c13_3;
        $select_c23 = $shift->c23;
        $select_c23_2 = $shift->c23_2;
        $select_c23_3 = $shift->c23_3;
        $select_c33 = $shift->c33;
        $select_c33_2 = $shift->c33_2;
        $select_c33_3 = $shift->c33_3;
        $select_c43 = $shift->c43;
        $select_c43_2 = $shift->c43_2;
        $select_c43_3 = $shift->c43_3;
        $select_c53 = $shift->c53;
        $select_c53_2 = $shift->c53_2;
        $select_c53_3 = $shift->c53_3;
        $select_d14 = $shift->d14;
        $select_d24 = $shift->d24;
        $select_d34 = $shift->d34;
        $select_d44 = $shift->d44;
        $select_d54 = $shift->d54;
        $select_e15 = $shift->e15;
        $select_e25 = $shift->e25;
        $select_e35 = $shift->e35;
        $select_e45 = $shift->e45;
        $select_e55 = $shift->e55;
        $select_f16 = $shift->f16;
        $select_f26 = $shift->f26;
        $select_f36 = $shift->f36;
        $select_f46 = $shift->f46;
        $select_f46_2 = $shift->f46_2;
        $select_f46_3 = $shift->f46_3;
        $select_f56 = $shift->f56;
        $select_g17 = $shift->g17;
        $select_g27 = $shift->g27;
        $select_g37 = $shift->g37;
        $select_g47 = $shift->g47;
        $select_g47_2 = $shift->g47_2;
        $select_g47_3 = $shift->g47_3;
        $select_g57 = $shift->g57;
        $select_h18 = $shift->h18;
        $select_h18_2 = $shift->h18_2;
        $select_h18_3 = $shift->h18_3;
        $select_h28 = $shift->h28;
        $select_h28_2 = $shift->h28_2;
        $select_h28_3 = $shift->h28_3;
        $select_h38 = $shift->h38;
        $select_h38_2 = $shift->h38_2;
        $select_h38_3 = $shift->h38_3;
        $select_h58 = $shift->h58;
        $select_h58_2 = $shift->h58_2;
        $select_h58_3 = $shift->h58_3;
        return view('shift.edit', [
            "shift" => $shift,
            "tags" => $tags,
            "select_a11" => $select_a11,
            "select_a21" => $select_a21,
            "select_a31" => $select_a31,
            "select_a41" => $select_a41,
            "select_a51" => $select_a51,
            "select_b12" => $select_b12,
            "select_b22" => $select_b22,
            "select_b32" => $select_b32,
            "select_b42" => $select_b42,
            "select_b52" => $select_b52,
            "select_c13" => $select_c13,
            "select_c13_2" => $select_c13_2,
            "select_c13_3" => $select_c13_3,
            "select_c23" => $select_c23,
            "select_c23_2" => $select_c23_2,
            "select_c23_3" => $select_c23_3,
            "select_c33" => $select_c33,
            "select_c33_2" => $select_c33_2,
            "select_c33_3" => $select_c33_3,
            "select_c43" => $select_c43,
            "select_c43_2" => $select_c43_2,
            "select_c43_3" => $select_c43_3,
            "select_c53" => $select_c53,
            "select_c53_2" => $select_c53_2,
            "select_c53_3" => $select_c53_3,
            "select_d14" => $select_d14,
            "select_d24" => $select_d24,
            "select_d34" => $select_d34,
            "select_d44" => $select_d44,
            "select_d54" => $select_d54,
            "select_e15" => $select_e15,
            "select_e25" => $select_e25,
            "select_e35" => $select_e35,
            "select_e45" => $select_e45,
            "select_e55" => $select_e55,
            "select_f16" => $select_f16,
            "select_f26" => $select_f26,
            "select_f36" => $select_f36,
            "select_f46" => $select_f46,
            "select_f46_2" => $select_f46_2,
            "select_f46_3" => $select_f46_3,
            "select_f56" => $select_f56,
            "select_g17" => $select_g17,
            "select_g27" => $select_g27,
            "select_g37" => $select_g37,
            "select_g47" => $select_g47,
            "select_g47_2" => $select_g47_2,
            "select_g47_3" => $select_g47_3,
            "select_g57" => $select_g57,
            "select_h18" => $select_h18,
            "select_h18_2" => $select_h18_2,
            "select_h18_3" => $select_h18_3,
            "select_h28" => $select_h28,
            "select_h28_2" => $select_h28_2,
            "select_h28_3" => $select_h28_3,
            "select_h38" => $select_h38,
            "select_h38_2" => $select_h38_2,
            "select_h38_3" => $select_h38_3,
            "select_h58" => $select_h58,
            "select_h58_2" => $select_h58_2,
            "select_h58_3" => $select_h58_3,
        ]);
    }

    public function update($id, Request $request)
    {
        $shift = Shift::findOrFail($id);
        $shift->a11 = $request->input('11');
        $shift->a21 = $request->input('21');
        $shift->a31 = $request->input('31');
        $shift->a41 = $request->input('41');
        $shift->a51 = $request->input('51');
        $shift->b12 = $request->input('12');
        $shift->b22 = $request->input('22');
        $shift->b32 = $request->input('32');
        $shift->b42 = $request->input('42');
        $shift->b52 = $request->input('52');
        $shift->c13 = $request->input('13');
        $shift->c13_2 = $request->input('13_2');
        $shift->c13_3 = $request->input('13_3');
        $shift->c23 = $request->input('23');
        $shift->c23_2 = $request->input('23_2');
        $shift->c23_3 = $request->input('23_3');
        $shift->c33 = $request->input('33');
        $shift->c33_2 = $request->input('33_2');
        $shift->c33_3 = $request->input('33_3');
        $shift->c43 = $request->input('43');
        $shift->c43_2 = $request->input('43_2');
        $shift->c43_3 = $request->input('43_3');
        $shift->c53 = $request->input('53');
        $shift->c53_2 = $request->input('53_2');
        $shift->c53_3 = $request->input('53_3');
        $shift->d14 = $request->input('14');
        $shift->d24 = $request->input('24');
        $shift->d34 = $request->input('34');
        $shift->d44 = $request->input('44');
        $shift->d54 = $request->input('54');
        $shift->e15 = $request->input('15');
        $shift->e25 = $request->input('25');
        $shift->e35 = $request->input('35');
        $shift->e45 = $request->input('45');
        $shift->e55 = $request->input('55');
        $shift->f16 = $request->input('16');
        $shift->f26 = $request->input('26');
        $shift->f36 = $request->input('36');
        $shift->f46 = $request->input('46');
        $shift->f46_2 = $request->input('46_2');
        $shift->f46_3 = $request->input('46_3');
        $shift->f56 = $request->input('56');
        $shift->g17 = $request->input('17');
        $shift->g27 = $request->input('27');
        $shift->g37 = $request->input('37');
        $shift->g47 = $request->input('47');
        $shift->g47_2 = $request->input('47_2');
        $shift->g47_3 = $request->input('47_3');
        $shift->g57 = $request->input('57');
        $shift->h18 = $request->input('18');
        $shift->h18_2 = $request->input('18_2');
        $shift->h18_3 = $request->input('18_3');
        $shift->h28 = $request->input('28');
        $shift->h28_2 = $request->input('28_2');
        $shift->h28_3 = $request->input('28_3');
        $shift->h38 = $request->input('38');
        $shift->h38_2 = $request->input('38_2');
        $shift->h38_3 = $request->input('38_3');
        $shift->h58 = $request->input('58');
        $shift->h58_2 = $request->input('58_2');
        $shift->h58_3 = $request->input('58_3');
        $shift->save();
        return redirect('shift');
    }
}
