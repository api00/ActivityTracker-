package com.service;

import com.domain.Blog;
import com.domain.TaxUser;
import com.domain.taxLiability;
import com.repository.BlogRepo;
import com.repository.TaxApplicationRepo;
import com.repository.TaxLiabilityRepo;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Service
@Transactional
public class BlogServiceImple implements BlogServices {
    private BlogRepo blogRepo;


    public BlogServiceImple(BlogRepo blogRepo) {
        this.blogRepo = blogRepo;
    }

    @Transactional
    public Blog insert(Blog blog) {
        blogRepo.create(blog);
        return blog;
    }

    @Transactional(readOnly = true)
    public Blog get(int id) {
        return blogRepo.get(id);
    }

    @Transactional(readOnly = true)
    public List<Blog> getAll() {

        return blogRepo.getAll();
    }

    @Transactional
    public Blog update(Blog blog) {
        return blogRepo.update(blog);
    }

    @Transactional
    public void delete(int id) {
        blogRepo.delete(id);
    }
}
