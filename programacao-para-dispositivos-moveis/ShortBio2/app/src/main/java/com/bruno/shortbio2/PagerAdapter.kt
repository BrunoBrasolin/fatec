package com.bruno.shortbio2
import androidx.fragment.app.Fragment
import androidx.fragment.app.FragmentManager
import androidx.fragment.app.FragmentPagerAdapter

class PagerAdapter(gerenciador: FragmentManager): FragmentPagerAdapter(gerenciador) {
    override fun getCount(): Int {
        return 3
    }

    override fun getItem(position: Int): Fragment {
        return when(position){
            0 -> Sobre()
            1 -> Formacao()
            else -> {
                Experiencia()
            }
        }
    }

    override fun getPageTitle(position: Int): CharSequence {
        return when(position){
            0 -> "Sobre mim"
            1 -> "Formação"
            2 -> "Experiência"
            else -> {
                "Error"
            }
        }
    }
}
