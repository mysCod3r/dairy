<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedResource extends JsonResource
{


    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category_id' => $this->category_id,
            'international_feed_number' => $this->international_feed_number,
            'energy_equation_class' => $this -> energy_equation_class,
            'forage_description' => $this -> forage_description,
            'tdn' => $this -> tdn,
            'de' => $this -> de,
            'dry_matter' => $this -> dry_matter,
            'ndf' => $this -> ndf,
            'adf' => $this -> adf,
            'lignin' => $this -> lignin,
            'cp' => $this -> cp,
            'ndfip' => $this -> ndfip,
            'adfip' => $this -> adfip,
            'protein_a' => $this -> protein_a,
            'protein_b' => $this -> protein_b,
            'protein_c' => $this -> protein_c,
            'protein_digestion_rate' => $this -> protein_digestion_rate,
            'rup_digest' => $this -> rup_digest,
            'fat' => $this -> fat,
            'ash' => $this -> ash,
            'cp_digestibility' => $this -> cp_digestibility,
            'ndf_digestibility' => $this -> ndf_digestibility,
            'calcium' => $this -> calcium,
            'phosphorus' => $this -> phosphorus,
            'magnesium' => $this -> magnesium,
            'chlorine' => $this -> chlorine,
            'potassium' => $this -> potassium,
            'sodium' => $this -> sodium,
            'sulfur' => $this -> sulfur,
            'cobalt' => $this -> cobalt,
            'copper' => $this -> copper,
            'iodine' => $this -> iodine,
            'iron' => $this -> iron,
            'manganese' => $this -> manganese,
            'selenium' => $this -> selenium,
            'zinc' => $this -> zinc,
            'vit_a' => $this -> vit_a,
            'vit_d' => $this -> vit_d,
            'vit_e' => $this -> vit_e,
            'arginine' => $this -> arginine,
            'histidine' => $this -> histidine,
            'isoleucine' => $this -> isoleucine,
            'leucine' => $this -> leucine,
            'lysine' => $this -> lysine,
            'methionine' => $this -> methionine,
            'pyhenylalanine' => $this -> pyhenylalanine,
            'threonine' => $this -> threonine,
            'tryptophan' => $this -> tryptophan,
            'valine' => $this -> valine,
            'ca_bioavailability' => $this -> ca_bioavailability,
            'p_bioavailability' => $this -> p_bioavailability,
            'mg_bioavailability' => $this -> mg_bioavailability,
            'cl_bioavailability' => $this -> cl_bioavailability,
            'k_bioavailability' => $this -> k_bioavailability,
            'na_bioavailability' => $this -> na_bioavailability,
            's_bioavailability' => $this -> s_bioavailability,
            'co_bioavailability' => $this -> co_bioavailability,
            'cu_bioavailability' => $this -> cu_bioavailability,
            'i_bioavailability' => $this -> i_bioavailability,
            'fe_bioavailability' => $this -> fe_bioavailability,
            'mn_bioavailability' => $this -> mn_bioavailability,
            'se_bioavailability' => $this -> se_bioavailability,
            'zn_bioavailability' => $this -> zn_bioavailability,
            'is_coarse_fodder' => $this -> is_coarse_fodder,
        ];
    }
}
