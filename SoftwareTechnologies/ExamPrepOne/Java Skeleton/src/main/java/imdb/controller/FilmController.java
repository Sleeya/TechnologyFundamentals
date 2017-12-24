package imdb.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import imdb.bindingModel.FilmBindingModel;
import imdb.entity.Film;
import imdb.repository.FilmRepository;

import javax.swing.text.View;
import java.util.List;

@Controller
public class FilmController {

	@Autowired
	private  FilmRepository filmRepository;


	@GetMapping("/")
	public String index(Model model) {
		List<Film> films = this.filmRepository.findAll();

		model.addAttribute("view","film/index");
		model.addAttribute("films",films);

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {

		model.addAttribute("view","film/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, FilmBindingModel filmBindingModel) {

		Film currentFilm = new Film();

		currentFilm.setName(filmBindingModel.getName());
		currentFilm.setDirector(filmBindingModel.getDirector());
		currentFilm.setGenre(filmBindingModel.getGenre());
		currentFilm.setYear(filmBindingModel.getYear());

		this.filmRepository.saveAndFlush(currentFilm);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		if (!this.filmRepository.exists(id)){
			return "redirect:/";
		}
		Film currentFilm = this.filmRepository.findOne(id);

		model.addAttribute("view","film/edit");
		model.addAttribute("film",currentFilm);
		return "base-layout";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, FilmBindingModel filmBindingModel) {
		if (!this.filmRepository.exists(id)){
			return "redirect:/";
		}

		Film currentFilm = this.filmRepository.findOne(id);


		currentFilm.setYear(filmBindingModel.getYear());
		currentFilm.setGenre(filmBindingModel.getGenre());
		currentFilm.setDirector(filmBindingModel.getDirector());
		currentFilm.setName(filmBindingModel.getName());

		this.filmRepository.saveAndFlush(currentFilm);

		return "redirect:/";
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		if (!this.filmRepository.exists(id)){
			return "redirect:/";
		}
		Film currentFilm = this.filmRepository.findOne(id);
		model.addAttribute("view","film/delete");
		model.addAttribute("film",currentFilm);

		return "base-layout";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id) {
		if (!this.filmRepository.exists(id)){
			return "redirect:/";
		}

		Film currentFilm = this.filmRepository.findOne(id);

		this.filmRepository.delete(currentFilm);


		return "redirect:/";
	}
}
