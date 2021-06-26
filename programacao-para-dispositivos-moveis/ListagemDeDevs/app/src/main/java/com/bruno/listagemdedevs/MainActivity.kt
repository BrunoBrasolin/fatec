    package com.bruno.listagemdedevs

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val rv = findViewById<RecyclerView>(R.id.rvUsuarios)

        val lista = mutableListOf<Usuario>(
            Usuario(nome="Bruno Brasolin", email="brunobrasolinc@gmail.com", stack= Stack.FULLSTACK, senioridade= Senioridade.JUNIOR),
            Usuario(nome="Rock Lee", email="rocklee@gmail.com", stack= Stack.BACKEND, senioridade= Senioridade.PLENO, foto = resources.getDrawable(R.drawable.rocklee)),
            Usuario(nome="Kakashi Hatake", email="kakashihatake@gmail.com", stack= Stack.FULLSTACK, senioridade= Senioridade.SENIOR, foto = resources.getDrawable(R.drawable.kakashi)),
            Usuario(nome="Neji Hyuuga", email="nejihyuuga@gmail.com", stack= Stack.BACKEND, senioridade= Senioridade.SENIOR, foto = resources.getDrawable(R.drawable.neji))
        )

        rv.adapter = UsuarioAdapter(lista)

        rv.layoutManager = LinearLayoutManager(this)

        // rv.layoutManager = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        // rv.layoutManager = GridLayoutManager(this, 2)

        // rv.layoutManager = StaggeredGridLayoutManager(2, StaggeredGridLayoutManager.VERTICAL)

    }
}
