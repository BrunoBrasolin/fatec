package com.bruno.listagemdepets

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val rv = findViewById<RecyclerView>(R.id.rvPet)

        val lista = mutableListOf<Pet>(
            Pet(foto = resources.getDrawable(R.drawable.milly), "Milly", TipoPet.CACHORRO, GeneroPet.FEMEA)
        )

        rv.adapter = PetAdapter(lista)
        rv.layoutManager = LinearLayoutManager(this)
    }
}