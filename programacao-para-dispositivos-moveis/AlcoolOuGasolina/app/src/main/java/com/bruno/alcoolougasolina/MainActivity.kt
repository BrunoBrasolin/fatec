package com.bruno.alcoolougasolina

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView

class MainActivity : AppCompatActivity() {

    private lateinit var botao: Button
    private lateinit var resultadoView: TextView
    private var precoGasolina: Double = 0.0
    private var precoAlcool: Double = 0.0
    private var resultado: Double = 0.0

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        botao = findViewById(R.id.button)
        botao.setOnClickListener{
            precoGasolina = findViewById<EditText>(R.id.gasolina_input).text.toString().toDouble()
            precoAlcool = findViewById<EditText>(R.id.alcool_input).text.toString().toDouble()
            resultadoView = findViewById(R.id.answer)

            resultado = precoAlcool / precoGasolina

            when {
                resultado < 0.7 ->  resultadoView.text = "Álcool é mais vantajoso"
                resultado == 0.7 ->  resultadoView.text = "Tanto álcool quanto gasolina tem o mesmo valor"
                resultado > 0.7 ->  resultadoView.text = "Gasolina é mais vantajosa"
            }
        }
    }
}