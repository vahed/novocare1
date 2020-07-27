<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicationInformation extends Model
{
    protected $fillable = [
        'medicationInformationID','whatIsAndWhatIsItUsedFor','warningsAndPrecautions','howToTakeMedicine','possibleSideEffects','howToStoreMedicine',
    ];
}
