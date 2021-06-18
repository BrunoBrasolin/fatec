package com.bruno.tabuada

import android.os.Bundle
import android.view.View
import android.widget.EditText
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
    }

    fun CalcularTabuada(view: View){
        val editText = findViewById<EditText>(R.id.editText)
        val tabuadaText = findViewById<TextView>(R.id.textView)
        val numeroString: String = editText.text.toString()
        val numero: Int = Integer.parseInt(numeroString)
        var result: Int
        val tabuada = StringBuffer()


        for(i in 1..10){
            result = i * numero
            tabuada.append("$numero x $i = $result \n\n")
        }
        tabuadaText.setText(tabuada);

    }
}