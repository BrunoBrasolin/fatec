package com.bruno.listagemdepets

import android.graphics.drawable.Drawable

data class Pet(
    var foto: Drawable?=null,
    var nome: String,
    var tipo: TipoPet,
    var genero: GeneroPet
)
